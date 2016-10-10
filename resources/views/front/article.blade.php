@extends('front.template.main')
@section('title',$article->title)

@section('content')
  <h1 class="title-front left">{{$article->title}}</h1>

<div class="row">
  <div class="col-sm-8 col-xs-12">
    <div class="fondo-articulo">
{!! $article->content !!}
    </div>
    <h3>Comentarios</h3>
    @foreach($article->tags as $tag)
      {{$tag->name}}
    @endforeach
    <div id="disqus_thread"></div>
    <script>
        (function() { // DON'T EDIT BELOW THIS LINE
          var d = document, s = d.createElement('script');
          s.src = '//cyberdreamschronicles.disqus.com/embed.js';
          s.setAttribute('data-timestamp', +new Date());
          (d.head || d.body).appendChild(s);
        })();
    </script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
  </div>
  <div class="col-sm-4 col-xs-12 aside">
      @include('front.template.partials.aside')
  </div>
</div>
@endsection
