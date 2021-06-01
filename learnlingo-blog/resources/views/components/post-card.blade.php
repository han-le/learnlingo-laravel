@props(['post'])

<div class="col-sm-6 mb-5">
    <div class="latest-post-article card box_shadow h-100">
        <div class="article-thumbnail">
            <a href="/post/{{$post->slug}}">
                <img src="{{$post->featured_img}}"
                     class="card-img-top" alt="featured-image">
            </a>
        </div>
        <div class="article-header card-body">
            <div class="article-category">
                <a href="/category/{{$post->category->category_slug}}">
                    <span class="category-pill">{{$post->category->category_name}}</span>
                </a>
            </div>
            <a href="/post/{{$post->slug}}">
                <h2 class="title-font card-title">{{$post->post_title}}</h2>
                <p class="card-text">
                    {{$post->excerpt}}
                </p>
            </a>
        </div>
        <div class="article-footer card-footer">
            <div class="footer_inside">
                <a href="/post/{{$post->slug}}">
                    <span>Read more</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                         fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
