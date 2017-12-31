@extends('layout.main')

@section('title', '| Sign Up')

@section('content')
<div class="col-md-8 col-md-offset-2" style="margin: auto; color: white">
<div class="jumbotron bg-dark">
	<h1>Sign Up</h1>
  {!! Form::open(['route' => 'posts.store']) !!}
    <div class="form-group">
      {{Form::label('nama', 'Nama Lengkap')}}
      {{Form::text('nama', '', ['class' => 'form-control', 'placeholder' => 'Nama Lengkap Anda'])}}
    </div>
    <div class="form-group">
      {{Form::label('email', 'E-Mail Address')}}
      {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email Anda'])}}
    </div>
    <div class="form-group">
      {{Form::label('username', 'Username')}}
      {{Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Username Anda'])}}
    </div>
    <div class="form-group">
      {{Form::label('password', 'Password')}}
      {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password Anda'])}}
    </div>
    <div class="form-group">
      {{Form::label('tanggal', 'Tanggal Lahir')}}
      {{Form::date('tanggal', \Carbon\Carbon::now(), ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
      {{Form::label('agama', 'Agama')}}
      {{Form::select('agama', ['Islam' => 'Islam', 'Kristen' => 'Kristen', 'Katolik' => 'Katolik', 'Hindu' => 'Hindu', 'Budha' => 'Budha',], null, ['class'=>'form-control', 'placeholder' => '-Pilih-'])}}
    </div>
    <div class="form-group">
      {{Form::label('gender', 'Jenis Kelamin')}}
      {{Form::select('gender', ['Pria' => 'Pria', 'Wanita' => 'Wanita'], null, ['class'=>'form-control', 'placeholder' => '-Pilih-'])}}
    </div>
    <div class="form-group">
      {{Form::label('alamat', 'Alamat')}}
      {{Form::textarea('alamat', '', ['class' => 'form-control', 'placeholder' => 'Alamat Anda'])}}
    </div>
    <div class="lead">
      {{Form::submit('Daftar', ['class' => 'btn btn-primary'])}}
    </div>
  {!! Form::close() !!}
</div>
</div>
@endsection