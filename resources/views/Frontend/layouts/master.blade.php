@include('Frontend.includes.head')
<!-- ***** Preloader Start ***** -->
@include('Frontend.includes.preloader') 
<!-- Header -->
@include('Frontend.includes.nav') 
<!-- Banner Starts Here -->
{{-- @include('Frontend.includes.banner') --}}
@yield('banner');




{{-- main content Starts here --}}
<section class="blog-posts">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="row">
                        @include('Frontend.includes.sidebar');
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- main content ends --}}





{{-- footer --}}
@include('Frontend.includes.footer');
{{-- scripts --}}
@include('Frontend.includes.scripts');
