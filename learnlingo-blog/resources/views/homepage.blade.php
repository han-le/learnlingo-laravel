@extends('layout')

@section('content')

    <div class="header-wrap">
        @include('components.navbar')
        @include('components.header')
    </div>

    <div class="wrap container">
        <div class="site-main row">
            <!-- Main Posts Area-->
            <div class="latest-post col-md-7 col-lg-8">
                <main class="container">
                    <div class="row">
                        @foreach($allPosts as $item)
                            <x-post-card :post="$item"></x-post-card>
                        @endforeach
                    </div>
                </main>

                <!-- Older Posts-->
                <div id="load-more" class="text-center">
                    <button class="btn-load-more">
                        <span>More posts</span>
                    </button>
                </div>
            </div>

            <!-- Sidebar-->
            <aside class="sidebar col-md-5 col-lg-4">
                <div class="sidebar-inside">
                    @include('components.sidebar-top-post')
                    @include('components.sidebar-follow')
                    @include('components.sidebar-must-read')
                    <x-sidebar-follow></x-sidebar-follow>
                </div>
            </aside>
        </div>
    </div>

    <x-post-highlight></x-post-highlight>

@endsection
