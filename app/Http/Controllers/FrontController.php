<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Tag;
use App\Article;
use Carbon\Carbon;

class FrontController extends Controller
{
    public function __construct() {
        Carbon::setLocale('es');
    }

    public function index() {
        $articles = Article::orderBy('id','DESC')->paginate(4);
        $articles->each(function($articles){ //usamos este each porque se tiene que hacer el recorrido de todas las categorías que tiene un artículo
    		$articles->category;//llamamos al método para traer la categoría
        	$articles->images;
    		$articles->user;
    	});
        return view('front.index')->with('articles',$articles);
    }

    public function searchCategory($name) {
        $category = Category::SearchCategory($name);
        $articles = $category->articles()->paginate(4);
        $articles->each(function($articles){ //usamos este each porque se tiene que hacer el recorrido de todas las categorías que tiene un artículo
    		$articles->category;//llamamos al método para traer la categoría
        	$articles->images;
    		$articles->user;
    	});
        return view ('front.index')
            	->with('articles',$articles);
    }

    public function searchTag($name) {
        $tag=Tag::SearchTag($name);
        $articles = $tag->articles()->paginate(4);
        $articles->each(function($articles){ //usamos este each porque se tiene que hacer el recorrido de todas las categorías que tiene un artículo
        	$articles->category;//llamamos al método para traer la categoría
        	$articles->images;
        	$articles->user;
        });
        return view ('front.index')->with('articles',$articles);
    }

    public function viewArticle($slug) {
      $article = Article::findBySlugOrFail($slug);
      $article->category;
      $article->user;
      $article->tags;
      $article->images;
      //get all articles to show them in aside
      $articles = Article::orderBy('id','DESC')->paginate(4);
      $articles->each(function($articles){ //usamos este each porque se tiene que hacer el recorrido de todas las categorías que tiene un artículo
		  $articles->category;//llamamos al método para traer la categoría
		  $articles->images;
		  $articles->user;
      });
      return view('front.article')->with([
             	'article'=>$article,
                'articles'=>$articles
            ]);
    }
}
