@extends('layout.main')

@section('title', '| Profil')

@section('content')
	<h1>Profil Anda</h1>
	@if(count($sign) > 0)
		@foreach($sign as $profil)
			<ul class="list-group">
				<li class="list-group-item">Name: {{$profil->name}}</li>
				<li class="list-group-item">Email: {{$profil->email}}</li>
				<li class="list-group-item">Username: {{$profil->username}</li>
			</ul>
			<br>
			<br>
		@endforeach
	@endif
@endsection