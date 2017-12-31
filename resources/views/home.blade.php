@extends('layout.main')

@section('title', '| Homepage')
@include('layout._nav')
@section('content')


<br><br><br>
<div class="jumbotron jumbo">
	<div class="site-wrapper text-center">
	    <div class="site-wrapper-inner">
	        <div class="cover-container">
				<main role="main" class="inner cover">
		            <h1 class="cover-heading">Welcome to Belajar IT</h1>
		            <h4>Everything You Need to Start</h4>
		            <hr>
		            <p class="lead"> <b>Mengajak kamu untuk belajar dan mengembangkan Aplikasi menggunakan Teknologi yang umum digunakan di Industri IT
					<br><br>
					Setelah mengikuti workshop ini, kamu akan siap untuk terjun ke industri IT dan memiliki kemampuan teknis terkini yang bisa diterapkan dalam proyek sesungguhnya.</b></p>
		            <p class="lead">
		              <a class="btn btn-primary btn-lg" href="{{route('posts.create')}}" role="button">Daftar Sekarang</a>
		            </p>
		        </main>
		    </div>
		</div>
	</div>
</div>
<br>
<hr class="foot">

<div class="card-deck">
  <div class="card jumbo">
    <div class="col-md-14" style="margin: auto;">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<!--ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		</ol-->
    <div class="carousel-inner keep" role="listbox">
      <div>
          <div class="carousel-item active">
            <img class="d-block img-fluid teng" src="{{asset('img/android.png')}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              
            </div>

            <div class="text"></div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid teng" src="{{asset('img/web.png')}}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
             
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid teng" src="{{asset('img/php.png')}}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid teng" src="{{asset('img/java.png')}}" alt="Fourth slide">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid teng" src="{{asset('img/mysql.png')}}" alt="Fifth slide">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
      </div>
    </div>
    <!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>-->
  </div>
</div>
    <div class="card-body text-center">
      <h4 class="card-title">Workshop</h4>
      <hr class="foot">
      <p class="card-text">Terdapat beberapa bidang pada workshop, antara lain Android Development, Laravel Framework, Java, Web Development, dan Database.</p>
    </div>
  </div>
  <div class="card jumbo">
    <div class="col-md-14" style="margin: auto;">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<!--ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		</ol-->
    <div class="carousel-inner keep" role="listbox">
      <div>
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="{{asset('img/lecturer.jpg')}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              
            </div>

            <div class="text"></div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="{{asset('img/lecturer1.jpg')}}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="{{asset('img/lecturer2.jpg')}}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="{{asset('img/lecturer3.jpg')}}" alt="Fourth slide">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="{{asset('img/lecturer4.jpg')}}" alt="Fifth slide">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
      </div>
    </div>
    <!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>-->
  </div>
</div>
    <div class="card-body text-center">
      <h4 class="card-title">Pemateri</h4>
 	  <hr class="foot">
      <p class="card-text">Pemateri yang expert dalam bidangnya.</p>
    </div>
  </div>
  <div class="card jumbo">
    <div class="col-md-14" style="margin: auto;">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<!--ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
		</ol-->
    <div class="carousel-inner keep" role="listbox">
      <div>
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="{{asset('img/cer1.jpg')}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              
            </div>

            <div class="text"></div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="{{asset('img/cer2.jpg')}}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="{{asset('img/cer3.png')}}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="{{asset('img/cer4.jpg')}}" alt="Fourth slide">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="{{asset('img/cer5.jpg')}}" alt="Fifth slide">
            <div class="carousel-caption d-none d-md-block">
              
            </div>
          </div>
      </div>
    </div>
    <!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>-->
  </div>
</div>
    <div class="card-body text-center">
      <h4 class="card-title">Sertifikat</h4>
      <hr class="foot">
      <p class="card-text">Peserta yang telah mengikuti dan lolos workshop akan mendapatkan seritifkat sesuai dengan apa yang telah diikuti.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
@endsection