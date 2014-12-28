@extends('layouts.master')
@section('title')
@parent
@stop
@section('content')
<section class="container-fluid header">
	<img class="logo" src="{{ asset('images/lawfirmstylefancy.png') }}" alt="Redvale Ridge B&B">
</section>

<section id="navigation">
<div class="container">
	<a href="#about" class="">About Our Home</a>
	<a href="#eco" class="">Eco Features</a>
	<a href="#todo" class="">Things To Do</a>
	<a href="#location" class="">Location</a>
	<a href="#location" class="">Bookings</a>
</div>
</section>

<section id="about">
<div class="container">
<h2>About Our Home</h2>
<p>Located at the top of the South Island of New Zealand, our contemporary country home blah blah something about awarding winning Galeo Estate
</p>
 @include('partials.carousel', array('images' => $images))
 </div>
</section>

<section id="eco">
<div class="container">
<h2>Eco Features</h2>
<div class="row">
<div class="col-lg-6 list">
<ul>
<li>Passive solar, thermally and energy efficient design</li>
<li>Thermally broken throughout the building envelope</li>
<li>Hybrid systems which includes power and water automated management</li>
<li>Solar panels for hot water and power</li>
<li>Non toxic building materials</li>
<li>Uprated natural wool insulation</li>
<li>Low VOC paint and finishes</li>
<li>Energy efficient lighting and appliances</li>
<li>Recycled glass bottle carpet in bedrooms</li>
</ul>
</div>
<div class="col-lg-6 pic">
<img src="http://d2o96h7uki1rfu.cloudfront.net/wp-content/uploads/traditional-solar-panels.jpg" height="250"/>
</div>
</div>

</section>

<section id="todo">
<div class="container">
<h2>Things To Do</h2>
<div class="row">
<div class="col-lg-6 pic">
<img src="http://www.backexperts.co.uk/media/531018/istock_000009408475small.jpg" height="300"/>
</div>
<div class="col-lg-6 list">
<ul>
<li>The Great Taste Trail</li>
<li>Wineries (25) and Wine Tours</li>
<li>Beer and Craft Breweries (24)</li>
<li>Southern Wilderness Gourmet Guided Walks</li>
<li>Art/Craft/Pottery Trail</li>
<li>Boating and Kayaking</li>
<li>Abel Tasman Excursions</li>
<li>Tramping</li>
<li>Fishing</li>
<li>Golfing</li>
<li>Walks</li>
<li>Horse Riding</li>
<li>Beaches</li>
</ul>
</div>
</div>
</section>

<section id="location">
<div class="container">
	<h2>Location</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m22!1m12!1m3!1d1498.8526719733986!2d173.0710452869974!3d-41.2935169070187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m7!1i0!3e6!4m0!4m3!3m2!1d-41.293762799999996!2d173.07104529999998!5e0!3m2!1sen!2snz!4v1419639257787" width="600" height="450" frameborder="0" style="border:0"></iframe>
</div>
</section>

<section id="bookings">
<div class="container">
	<h2>Bookings Calendar</h2>
	<p>
		Browse through the calendar below to see available dates, then email us at <a href="mailto:redvaleridge@gmail.com">redvaleridge@gmail.com</a>
	</p>
	<div class="calendar">
	</div>
</div>
</section>
@stop