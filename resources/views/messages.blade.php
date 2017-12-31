@extends('layout.main')

@section('title', '| Pesan')
@include('layout._nav')
@section('content')
<br><br><br>
<div style="color: white;">
	<h1>Pesan</h1>
	@if(count($messages) > 0)
		@foreach($messages as $message)
		<div style="color: black">
			<ul class="list-group">
				<li class="list-group-item">Name: {{$message->name}}</li>
				<li class="list-group-item">Email: {{$message->email}}</li>
				<li class="list-group-item">Message: {{$message->message}}</li>
			</ul>
			<br>
			<br>
		</div>
		@endforeach
	@endif
</div>
@endsection