<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            {{-- dashboard home link --}}
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="{{route('back.index')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard 
            </a>
            <a class="nav-link" href="{{route('back.index')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Profile
            </a>

            {{-- dropdown link --}}
            <div class="sb-sidenav-menu-heading">Interface</div>
                {{-- Posts --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Posts" aria-expanded="false" aria-controls="Posts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Posts
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="Posts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('category.create')}}">Create Category</a>
                    <a class="nav-link" href="{{route('category.index')}}">Category List</a>
                </nav>
            </div>
                {{-- Category --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Category
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('category.create')}}">Create Category</a>
                    <a class="nav-link" href="{{route('category.index')}}">Category List</a>
                </nav>
            </div>
                {{-- Tags --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Tags" aria-expanded="false" aria-controls="Tags">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Tags
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="Tags" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('category.create')}}">Create Category</a>
                    <a class="nav-link" href="{{route('category.index')}}">Category List</a>
                </nav>
            </div>
                {{-- Comments --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Comments" aria-expanded="false" aria-controls="Comments">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Comments
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="Comments" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('category.create')}}">Create Category</a>
                    <a class="nav-link" href="{{route('category.index')}}">Category List</a>
                </nav>
            </div>
                {{-- Drafts --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Drafts" aria-expanded="false" aria-controls="Drafts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Drafts
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="Drafts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('category.create')}}">Drafts List</a>
                </nav>
            </div>
                {{-- Subscribers --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Subscribers" aria-expanded="false" aria-controls="Subscribers">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Subscribers
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="Subscribers" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('category.create')}}">Mailing List</a>
                    <a class="nav-link" href="{{route('category.index')}}">Send Newsletter</a>
                </nav>
            </div>
                {{-- Media Library --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#media" aria-expanded="false" aria-controls="media">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Media Library
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="media" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('category.create')}}">Images</a>
                    <a class="nav-link" href="{{route('category.index')}}">Videos</a>
                    <a class="nav-link" href="{{route('category.index')}}">Documents</a>
                </nav>
            </div>
                {{-- Pages --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Pages" aria-expanded="false" aria-controls="Pages">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Pages
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="Pages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('category.create')}}">About Us</a>
                    <a class="nav-link" href="{{route('category.index')}}">Contact Us</a>
                    <a class="nav-link" href="{{route('category.index')}}">Terms of Service</a>
                    <a class="nav-link" href="{{route('category.index')}}">Rules & Regulations</a>
                    <a class="nav-link" href="{{route('category.index')}}">Privacy & Policy</a>
                </nav>
            </div>
                {{-- Pages --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Users" aria-expanded="false" aria-controls="Users">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Users
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="Users" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('category.create')}}">Manage User</a>
                    <a class="nav-link" href="{{route('category.index')}}">Roles & Permission</a>
                </nav>
            </div>
                {{-- Settings --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#setting" aria-expanded="false" aria-controls="setting">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Settings
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="setting" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('category.create')}}">Site Settings</a>
                    <a class="nav-link" href="{{route('category.index')}}">User Permissions</a>
                </nav>
            </div>

            {{-- single link --}}
            <div class="sb-sidenav-menu-heading">Addons</div>
            <a class="nav-link" href="charts.html">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Top Commenters
            </a>
            <a class="nav-link" href="charts.html">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                User Feedback
            </a>
            <a class="nav-link" href="charts.html">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                User Reports
            </a>
            <a class="nav-link" href="charts.html">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Announcements
            </a>

        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as Admin:</div>
        
        @auth
            {{Auth::user()->name}}
        @else
            Demo Guest
        @endauth
    </div>
</nav>