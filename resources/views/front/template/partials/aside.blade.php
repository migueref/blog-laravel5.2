<div >
    <h3 class="alert alert-warning ">{{trans('app.title_categories')}}</h3>
</div>
<div class="panel-body">
    <ul class="list-group">
        @foreach($categories as $category)
          <li class="list-group-item">
              <span class="badge">{{$category->articles->count()}}</span>
              <a href="{{route('front.search.category',$category->name)}}">
                  {{$category->name}}
              </a>

          </li>
        @endforeach
    </ul>
</div>
<!--tags-->
<div >
    <h3 class="alert alert-warning">Tags1</h3>
</div>
<div class="panel-body">
    <ul class="list-group">
      @foreach($tags as $tag)
        <li class="list-group-item">
            <span class="badge">{{$tag->articles->count()}}</span>
            <a href="{{route('front.search.tag',$tag->name)}}">{{$tag->name}}</a>
        </li>
      @endforeach
    </ul>
</div>
