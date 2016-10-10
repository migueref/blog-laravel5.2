@extends('front.template.main')

@section('title','Blog')

@section('content')
<hr>
<h1>
{{trans('app.title_last_articles')}}
</h1>
<h2>{{trans('app.test',['name'=>'Miguel'])}}</h2>
<div class="row">
  <div class="col-xs-8">


  @foreach($articles as $article)
  <div class="col-sm-6 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-body">
          <a href="{{route('front.view.article',$article->slug)}}" class"thumbnail">
            @foreach($article->images as $image)
              <img src="{{asset('images/articles/'.$image->name)}}" style="width:400px;height:400px;"class="img-responsive img-article" alt="" />
            @endforeach

          </a>
            <a href="{{route('front.view.article',$article->slug)}}" ><h3 class="text-center">{{$article->title}}</h3></a>
          <hr>
          <i class="fa fa-folder-open-o"></i><a href="{{route('front.search.category',$article->category->name)}}">{{$article->category->name}}</a>
          <div class="pull-right">
            <i class="fa fa-clock-o"></i>{{$article->created_at->diffForHumans()}}
          </div>
        </div>
    </div>
  </div>
  @endforeach
  </div>
  <div class="col-sm-4 col-xs-12 aside">
      @include('front.template.partials.aside')
  </div>
</div>

	{!! $articles->render() !!}
@endsection
