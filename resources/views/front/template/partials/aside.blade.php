<div class="sidebar sidebar-right">

						<div class="widget recent-posts">
							<h3 class="widget-title">Recent Posts</h3>
							<ul class="unstyled clearfix">
                @foreach ($articles->take(3) as $article)
                  <li>
                      <div class="posts-thumb pull-left">
                        @foreach($article->images as $image)
                          <a href="{{route('front.view.article',$article->slug)}}"><img alt="{{ $article->title }}" src="{{asset('images/articles/'.$image->name)}}"></a>
                        @endforeach

                      </div>
                      <div class="post-info">
                          <h4 class="entry-title">
                            <a href="{{route('front.view.article',$article->slug)}}">{{ $article->title }}</a>
                          </h4>
                      </div>
                      <div class="clearfix"></div>
                    </li><!-- 1st post end-->

                @endforeach
                </ul>

						</div><!-- Recent post end -->

						<div class="widget">
							<h3 class="widget-title">Categories</h3>
							<ul class="arrow nav nav-tabs nav-stacked">
                @foreach($categories as $category)
                  <li class="list-group-item">
                      <span class="badge">{{$category->articles->count()}}</span>
                      <a href="{{route('front.search.category',$category->name)}}">
                          {{$category->name}}
                      </a>

                  </li>
                @endforeach

		          </ul>
						</div><!-- Categories end -->

						<div class="widget widget-tags">
							<h3 class="widget-title">Tags </h3>

							<ul class="unstyled clearfix">
                @foreach($tags as $tag)
                  <li>
                      <a href="{{route('front.search.tag',$tag->name)}}">{{$tag->name}}</a>
                  </li>
                @endforeach
			        </ul>
						</div><!-- Tags end -->
					</div><!-- Sidebar end -->
