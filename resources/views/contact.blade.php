@extends('layout.main')

@section('title', '| Contact')
@include('layout._nav')
@section('content')
<br><br><br>

<div style="color: white; margin: auto" class="jumbotron jumbo col-md-8">
<h1>Contact</h1>

{!! Form::open(['url' => 'contact/submit']) !!}
	<div class="form-group">
		{{Form::label('name', 'Name')}}
		{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Name Here'])}}
	</div>
	<div class="form-group">
		{{Form::label('email', 'E-Mail Address')}}
		{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter Email Here'])}}
	</div>
	<div class="form-group">
		{{Form::label('message', 'Message')}}
		{{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter Message Here'])}}
	</div>
	<div>
		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	</div>
{!! Form::close() !!}
</div>
@endsection