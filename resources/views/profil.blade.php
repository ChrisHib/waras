@extends('layout.main')

@section('title', '| Profil')
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
<div style="color: white; margin: auto;" class="col-md-8 jumbotron jumbo">
	<h1>Edit Profil</h1>
	<hr class="foot">
	{!! Form::model($user, ['method' => 'PATCH','route' => ['User.update', $user->id]]) !!}
	    <div class="form-group">
	      {{Form::label('name', 'Nama Lengkap')}}
	      {{Form::text('name', Auth::user()->name, ['class' => 'form-control'])}}
	    </div>
	    <div class="form-group">
	      {{Form::label('email', 'E-Mail Address')}}
	      {{Form::text('email', Auth::user()->email, ['class' => 'form-control'])}}
	    </div>
	    <div class="form-group">
	      {{Form::label('username', 'Username')}}
	      {{Form::text('username', Auth::user()->username, ['class' => 'form-control'])}}
	    </div>
	    <div class="form-group">
	      {{Form::label('password', 'Password')}}
	      {{Form::password('password', ['class' => 'form-control'])}}
	    </div>
	    <div class="form-group">
	      {{Form::label('tanggal', 'Tanggal Lahir')}}
	      {{Form::date('tanggal', Auth::user()->tanggal, ['class' => 'form-control'])}}
	    </div>
	    <div class="form-group">
	      {{Form::label('agama', 'Agama')}}
	      {{Form::select('agama', ['Islam' => 'Islam', 'Kristen' => 'Kristen', 'Katolik' => 'Katolik', 'Hindu' => 'Hindu', 'Budha' => 'Budha',], null, ['class'=>'form-control'])}}
	    </div>
	    <div class="form-group">
	      {{Form::label('gender', 'Jenis Kelamin')}}
	      {{Form::select('gender', ['Pria' => 'Pria', 'Wanita' => 'Wanita'], null, ['class'=>'form-control'])}}
	    </div>
	    <div class="form-group">
	      {{Form::label('alamat', 'Alamat')}}
	      {{Form::textarea('alamat', Auth::user()->alamat, ['class' => 'form-control'])}}
	    </div>
	    <div class="lead">
	      {{Form::submit('Edit', ['class' => 'btn btn-primary'])}}
	    </div>
	{!! Form::close() !!}
</div>
@endsection