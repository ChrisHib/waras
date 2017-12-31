<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Belajar IT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav mr-auto">
        <li><a class="nav-link" href="/contact">Contact</a></li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
    </form> -->
    @guest
        <li><a class="btn btn-primary btn-lg" href="{{ route('login') }}">Login</a></li>&nbsp;
    @else
        <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->name }}
            </button>
            <div class="dropdown-menu">
              <a href="{{route('User.edit',Auth::user()->id)}}">Profil</a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </div>
          </div>
    @endguest
  </div>
</nav>