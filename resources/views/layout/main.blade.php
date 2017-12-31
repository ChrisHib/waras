<!DOCTYPE html>
<html lang="en">
@include('layout._head')

<body>	
	<br>
	<div class="container">
		@include('inc.messages')
		@yield('content')
		@include('layout._footer')
	</div>

    @include('layout._javascript')
  </body>
</html>