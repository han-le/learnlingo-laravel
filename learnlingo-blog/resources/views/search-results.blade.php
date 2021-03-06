<x-layout>

    <div class="post-page-nav">
        <x-navbar></x-navbar>
    </div>

    <div class="wrap" container>
        <div class="site-main row">

            @if(count($searchResults) == 0)
                <x-no-result />
            @else
                <h3>Các bài viết cho "{{$keyword}}"</h3>
                <ul>
                    @foreach($searchResults as $item)
                        <li>
                            <a href="/{{$item->slug}}">{{$item->post_title}}</a>
                        </li>
                    @endforeach
                </ul>
                <a href="/">Back to homepage</a>
                <img src="/images/shaking-cat.gif" alt="" style="width: 20%">

            @endif

        </div>
    </div>


    <x-post-highlight />
</x-layout>




