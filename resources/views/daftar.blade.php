@extends('layout.main')

@section('title', '| Daftar Workshop')

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

<div style="color: white; margin: auto" class="jumbotron jumbo col-md-4">
<h1>Daftar Workshop</h1>

{!! Form::open(['url' => 'daftar/submit']) !!}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nama Peserta'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email Peserta'])}}
    </div>
    <div class="form-group">
          {{Form::label('kelas', 'Kelas  ( Pilih antara Web, Android, Database, PHP, Java)')}}
          {{Form::text('kelas', '', ['class' => 'form-control', 'placeholder' => 'Kelas Peserta'])}}
        </div>
    <div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
</div>