@include('Backend.includes.header')
        {{-- navbar start --}}
@include('Backend.includes.nav')

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        {{-- sidebar start --}}
        @include('Backend.includes.sidebar')
        {{-- sidebar end --}}
    </div>

    <div id="layoutSidenav_content">
        <main>
            {{-- main content --}}
            @yield('content')
            {{-- main content end --}}
        </main>

        {{-- footer start --}}
        @include('Backend.includes.footer')
        {{-- footer end --}}
    </div>
</div>

@include('Backend.includes.scripts')
