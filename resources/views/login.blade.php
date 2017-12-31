@extends('layout.main')

@section('title', '| Login')

@section('content')

  <div class="col-md-6 col-md-offset-3" style="margin: auto;">
    <div class="jumbotron text-center">
      <form class="form-signin">
        <h2 class="form-signin-heading">Please Login</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      </form>
    </div>
  </div>

@endsection