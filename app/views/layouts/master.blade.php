<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <title>
		@section('title')
		Redvale Ridge B&B
		@show
		</title>
		<meta name="description" content="Join us at our beautiful contemporary country home, which incorporates many eco features, and enjoy the stunning views and myriad things to see and do.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link href="{{ asset('bower/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('bower/bootstrap-datepicker/css/datepicker.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

 <body>

  @yield('content')

  <section id="footer" class="footer">
<div class="container">
<div class="nav-links">
	<a href="#about" >About the House</a>
	<a href="#eco" >Eco Features</a>
	<a href="#todo" >Things to do</a>
	<a href="#location" >Location</a>
	<a href="#bookings" >Bookings</a>
	 @if(!Auth::check())
	{{ HTML::link('login', 'Login') }}
	@else
	{{ HTML::link('logout', 'Logout') }}
	@endif

</div>



<div class="contact-info">
	Telephone -
	<a href="tel:+64035446478">+64 03 544 6478
	</a>
	Email -
	<a href="mailto:redvaleridge@gmail.com">
    	redvaleridge@gmail.com
	</a>
</div>
<div class="copyright-info">
		©Copyright 2015 Joshua Gagnon
</div>
</div>
</section>

<script src="{{ asset('bower/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('bower/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/bower/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>