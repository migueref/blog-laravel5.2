@extends('front.template.main')

@section('title','Blog')

@section('content')
<hr>
<h1>
{{trans('app.title_last_articles')}}
</h1>

<div class="row">
  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
    @foreach($articles as $article)
        <div class="post">
    			<div class="post-media post-image">
            @foreach($article->images as $image)
              <img src="{{asset('images/articles/'.$image->name)}}" class="img-responsive" alt="" />
            @endforeach
    				<div class="post-meta-date" style="padding:15px!important;">
    					<span class="day">{{$article->created_at->diffForHumans()}}<br></span>
    				</div>
    			</div>
    			<div class="post-body">
    				<div class="entry-header">
    					<h2 class="entry-title">
    						<a href="{{route('front.view.article',$article->slug)}}">{{$article->title}}</a>
    					</h2>
    					 <div class="post-meta">
    						<span class="post-author">
    							<i class="fa fa-user"></i><a href="#"> {{$article->user->name}}</a>
       					</span>


    					</div>
    				 </div><!-- header end -->

    				 <div class="entry-content">
    					     <p>{!!  str_limit($article->content, 1000 )!!}</p>
    				 </div>
    				 <div class="post-footer">
    					<a href="{{route('front.view.article',$article->slug)}}" class="btn btn-primary">Continue Reading</a>
    				 </div>

    			</div><!-- post-body end -->
    		</div><!-- 1st post end -->
      @endforeach
    </div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      @include('front.template.partials.aside')
  </div>
</div>

{!! $articles->render() !!}
@endsection
