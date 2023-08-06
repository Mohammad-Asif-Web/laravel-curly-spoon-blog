<header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="{{route('front.index')}}"><h2>Stand Blog<em>.</em></h2></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('front.index')}}">Home
                <span class="sr-only">(current)</span>
              </a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="{{route('front.about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('front.contact')}}">Contact Us</a>
            </li>
            @auth
            <li class="nav-item">
              <a class="nav-link" href="profile.html">Profile</a>
            </li>
            @else
            <li class="nav-item main-button">
              <a class="nav-link" href="login.html">Sign In</a>
            </li>
            @endauth
            
          </ul>
        </div>
      </div>
    </nav>
</header>