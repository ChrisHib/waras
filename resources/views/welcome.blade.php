@extends('layout.main')

@section('title', '| Homepage')

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <a class="navbar-brand" href="/welcome">Belajar IT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav mr-auto">
        <li><a class="nav-link" href="/workshop">Workshop</a></li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
    </form>-->
    @guest
        <li><a class="btn btn-primary btn-lg" href="{{ route('login') }}">Login</a></li>&nbsp;&nbsp;&nbsp;
        <li><a class="btn btn-primary btn-lg" href="{{ route('register') }}">Register</a></li>
    @else
        <li class="dropdown">
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
        </li>
    @endguest
  </div>
</nav>
<br><br><br>
@section('content')

<div class="site-wrapper text-center" style="color: white">
    <div class="site-wrapper-inner">
        <div class="cover-container">
            <main role="main" class="inner cover">
                <h1 class="cover-heading">Welcome {{ Auth::user()->name }}</h1>
                <h4>Everything You Need to Start</h4>
            </main>
        </div>
    </div>
</div>
<hr class="foot">
<div class="col-md-8 col-md-offset-2" style="margin: auto;">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div>
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="{{asset('img/idea.jpg')}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h3 style="color: white;">Temukan Passion Anda</h3>
            </div>

            <div class="text"></div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="{{asset('img/work.jpg')}}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h3 style="color: white;">Ikuti Workshop yang Diinginkan</h3>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="{{asset('img/teach.jpg')}}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h3 style="color: white;">Pemateri Handal di Bidangnya</h3>
            </div>
          </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
@endsection