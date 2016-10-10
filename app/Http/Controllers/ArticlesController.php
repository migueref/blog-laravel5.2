<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;
use App\Http\Requests\ArticleRequest;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $articles=Article::search($request->title)->orderBy('id', 'DESC')->paginate(5);
		$articles->each(function($articles){
			$articles->category;
			$articles->user;

		} );
		return view('admin.articles.index')->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	   $categories = Category::orderBy('name','ASC')->lists('name','id');
	    $tags = Tag::orderBy('name','ASC')->lists('name','id');
	  // dd($categories);
	  // $tags	= 	Tag::orderBy('name','ASC')->get();

       return view('admin.articles.create')
				->with('categories',$categories)
				->with('tags',$tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
		//dd($request->input('tags'));
		if($request->file('image')){
			 $file = $request->file('image');
			$name = 	'cyberdreams_'.time().'.'.$file->getClientOriginalExtension();
			$path = public_path().'/images/articles/';
			$file->move($path,$name);

		}
		$article = new Article($request->all());
		$article->user_id =\Auth::user()->id;
		$article->save();
		 $article->tags()->sync($request->input('tags'));
		$image = new Image();
		$image->name = $name;
		$image->article()->associate($article);
		$image->save();
		flash('Se ha registrado el artículo '.$article->title.' de forma exitosa', 'success');
		return redirect()->route('admin.articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article =  Article::find($id);
        $article->category;
        $my_tags=$article->tags->lists('id')->ToArray();
        $categories = Category::orderBy('name','DESC')->lists('name','id'); //le pasamos solo la lista y no el objeto completo
        $tags = Tag::orderBy('name','DESC')->lists('name','id');
        return view('admin.articles.edit')
                ->with('categories',$categories)
                ->with('tags',$tags)
                ->with('my_tags',$my_tags)
                ->with('article',$article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->fill($request->all());
        $article->save();
        $article->tags()->sync($request->tags);
        flash('Se ha actualizado '.$article->title.' De forma exitosa', 'success');
    		return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $article = Article::find($id);
	   $article->delete();
		flash('Se ha eliminado '.$article->title.' De forma exitosa', 'danger');
		return redirect()->route('admin.articles.index');
    }
}
