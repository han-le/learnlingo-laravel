<x-layout>
    <div class="header-wrap">
        <x-navbar />
        <x-header />
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

                    <div class="pagination_ row">
                        {{$allPosts->links()}}
                    </div>
                </main>
            </div>

            <!-- Sidebar-->
            <aside class="sidebar col-md-5 col-lg-4">
                <div class="sidebar-inside">
                    <x-sidebar-must-read :allPosts="$allPosts"></x-sidebar-must-read>
                    <x-sidebar-follow></x-sidebar-follow>
                    <x-sidebar-top-post></x-sidebar-top-post>
                </div>
            </aside>
        </div>
    </div>

    <x-post-highlight />

</x-layout>

forminput
