@extends('layout.main')

@section('title', '| Kelas')

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
<div class="jumbotron jumbo">
	<h1 style="color: white">Workshop yang Tersedia</h1>
	<hr class="foot">
	<ul class="list-group">
		<li class="list-group-item">
			<table>
				<tr>
					<td><h1>Javascript</h1></td>
				</tr>
			</table>
		</li>		
		<li class="list-group-item">Deskripsi: Mempelajari javascript lebih dalam</li>
		<li class="list-group-item">Pemateri: Jajang Sudrajat</li>
		<li class="list-group-item">Harga: Rp. 45000</li>
		<li class="list-group-item">Kuota Kelas: 35</li>
		<li class="list-group-item">Tanggal Mulai: 12 Januari 2018</li>
		<li class="list-group-item">Tanggal Berakhir: 30 Januari 2018</li>
		<a class="btn btn-primary btn-lg" href="/daftar" role="button">Daftar</a>
	</ul>
	<hr class="foot">
	<ul class="list-group">
		<li class="list-group-item">
			<table>
				<tr>
					<td><h1>Seluk Beluk MySQL</h1></td>
				</tr>
			</table>
		</li>	
		<li class="list-group-item">Deskripsi: Apa pokok-pokok yang diperlukan dalam database?</li>
		<li class="list-group-item">Pemateri: Muhammad Ammar</li>
		<li class="list-group-item">Harga: Rp. 85000</li>
		<li class="list-group-item">Kuota Kelas: 50</li>
		<li class="list-group-item">Tanggal Mulai: 20 Januari 2018</li>
		<li class="list-group-item">Tanggal Berakhir: 9 Pebruari 2018</li>
		<a class="btn btn-primary btn-lg" href="/daftar" role="button">Daftar</a>
	</ul>
	<hr class="foot">
	<ul class="list-group">
		<li class="list-group-item">
			<table>
				<tr>
					<td><h1>Java</h1></td>
				</tr>
			</table>
		</li>
		<li class="list-group-item">Deskripsi: Kupas tuntas bahasa Java</li>
		<li class="list-group-item">Pemateri: Suprapto</li>
		<li class="list-group-item">Harga: Rp. 78000</li>
		<li class="list-group-item">Kuota Kelas: 25</li>
		<li class="list-group-item">Tanggal Mulai: 17 Januari 2018</li>
		<li class="list-group-item">Tanggal Berakhir: 31 Januari 2018</li>
		<a class="btn btn-primary btn-lg" href="/daftar" role="button">Daftar</a>
	</ul>
	<br>
	<br>
</div>
@endsection