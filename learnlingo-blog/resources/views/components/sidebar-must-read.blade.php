<section class="sidebar-section box_shadow" id="">
    <h2 class="handwriting-font">
        Must read
    </h2>
    <ul class="">
        @foreach($allPosts as $item)
            @if($item->must_read)
                <li class="post-list-item">
                    <a href="{{$item->slug}}">
                        <div class="sidebar-post card">
                            <div class="row g-0">
                                <div class="sidebar-post-thumbnail col-md-4">
                                    <img src="{{$item->featured_img}}" class="w-100" alt="featured_img">
                                </div>
                                <div class="sidebar-post-title col-md-8">
                                    <div class="card-body">
                                        <h3 class="card-title">
                                            {{$item->post_title}}
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</section>
