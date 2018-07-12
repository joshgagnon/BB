@extends('layouts.master')
@section('title')
@parent
@stop
@section('content')

<section id="top">
    <img class="logo" src="{{ asset('images/bb3.png') }}" alt="Redvale Ridge B&B" />
<div class="fixed-link">
<div id="SMART-widget-container"><a target="_blank" href="https://smartgms.com/book/smartcal?cid=88303"><img src="https://smartgms.com/site/templates/img/smartres/buttons/button05.png" width="270" height="59" alt="Availability and Book Now"></a></div>
</div>


<div class='nav-links'>
<a href="#home-head">
The Home
</a>
<a href="#rooms-head">
Rooms & Rates
</a>

    <a href="#hosts-head">
    About Us
    </a>
    <a href="#location-head">
    Contact Us
    </a>

</div>



    </section>
<section class="container-fluid header">
     @include('partials.carousel', array('images' => $banner,'bg' => true, 'id' => 'banner-cara'))

</section>

<!--<section id="navigation">
<div class="container">
	<a href="#house" class="">The Home</a>
	<a href="#rooms" class="">Rooms & Rates</a>
	<a href="#todo" class="">Things To Do</a>
	<a href="#hosts" class="">Hosts</a>
	<a href="#food" class="">Food</a>
</div>
</section>-->

<section id="intro">
		A beautiful contemporary, country Bed and Breakfast, centrally located between Nelson and Motueka, Tasman Bay, New Zealand.
</section>

<section id="quotes">
    <div class="container">
    <div class="row">
    <div class="col-md-6">
        <p class="quote">"Best of B&B experiences."</p><span class="quote-attribution">- Clemens (AT)</span>
    </div>
    <div class="col-md-6">
        <p class="quote">"Best B&B we have stayed at!"</p><span class="quote-attribution">- John (NZ)</span>
    </div>
    </div>
    </div>
</section>

<section id="main-menu">
<div class="container">

<!-- <div class="row">
	<div class="col-md-4">
		<a href="#home-head">
		<div class="menu-box">
			<div class="image-box home-box">

			</div>
			<div class="text-box">
				The Home
			</div>
		</div>
		</a>
	</div>
	<div class="col-md-4">
		<a href="#rooms-head">
		<div class="menu-box">
			<div class="image-box room-box">

			</div>
			<div class="text-box">
				Rooms & Rates
			</div>
		</div>
		</a>
	</div>


	<div class="col-md-4">
			<a href="#food-head">
		<div class="menu-box">
			<div class="image-box food-box">

			</div>
			<div class="text-box">
				Food
			</div>
		</div>
			</a>
	</div>

	<div class="col-md-4">
			<a href="#todo-head">
		<div class="menu-box">
			<div class="image-box thingstodo-box">

			</div>
			<div class="text-box">
				Things To Do
			</div>
		</div>
			</a>
	</div>

	<div class="col-md-4">
			<a href="#hosts-head">
		<div class="menu-box">
			<div class="image-box aboutus-box">

			</div>
			<div class="text-box">
				About Us
			</div>
		</div>
			</a>
	</div>

	<div class="col-md-4">
			<a href="#location-head">
		<div class="menu-box">
			<div class="image-box location-box">

			</div>
			<div class="text-box">
				Location
			</div>
		</div>
		</a>
	</div>
-->


	<div id="links" >
		<div>
			<a target="_blank" href="http://www.bedandbreakfastnz.co.nz/redvale-ridge-bed-and-breakfast-nelson.html" ><img class="association" src="{{ asset('images/bandbassoc.png') }}" alt="B and B Association" /></a></div>
		<div>	<a target="_blank" href="https://www.facebook.com/rrbandb"><img class="facebook" src="{{ asset('images/FB-f-Logo__blue_144.png') }}" alt="Find us on Facebook" /></a></div>
		<!-- <div>
		<div id="TA_rated860" class="TA_rated">
		<ul id="dYlfdXwAbI" class="TA_links iMWitMLK86gO">
		<li id="G8rQPvOxA" class="XwqrStLvO3">
		<a target="_blank" href="http://www.tripadvisor.co.nz/Hotel_Review-g8099604-d7986014-Reviews-Redvale_Ridge_B_B-Redwood_Valley_Nelson_Tasman_Region_South_Island.html"><img src="http://www.tripadvisor.co.nz/img/cdsi/img2/badges/ollie-11424-2.gif" alt="TripAdvisor"/></a>
		</li>
		</ul>
		</div>
		<script src="http://www.jscache.com/wejs?wtype=rated&amp;uniq=860&amp;locationId=7986014&amp;lang=en_NZ&amp;display_version=2"></script>
		</div> -->


<div style="zoom: 0.7;" id="TA_certificateOfExcellence438" class="TA_certificateOfExcellence"><ul id="sOEnGP2" class="TA_links SLE3djcIzL8"><li id="13ubKiW" class="rWj2hpDKUkF"><a target="_blank" href="https://www.tripadvisor.co.nz/Hotel_Review-g8099604-d7986014-Reviews-Redvale_Ridge_B_B-Redwood_Valley_Nelson_Tasman_Region_South_Island.html"><img src="https://www.tripadvisor.co.nz/img/cdsi/img2/awards/CoE2017_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=certificateOfExcellence&amp;uniq=438&amp;locationId=7986014&amp;lang=en_NZ&amp;year=2017&amp;display_version=2"></script>

	</div>


</div>
</section>

<section id="about">
<h2 id="about-head">Redvale Ridge Bed and Breakfast</h2>
<div class="container">
<div class="row">
<div class="col-lg-6">
<p>Our home situated at 114 Redvale Rd, in the award winning GALEO Estate is a contemporary
country home, which blends in aesthetically with the environment. In building our home we
thought about health, well-being and impact on the environment so incorporated many eco
features. The views from our home are simply stunning, taking in the Western Ranges,
Tasman Bay out to D’Urville Island and at night the twinkling lights of Nelson.</p>
<p>Being between the thriving town of Richmond and the beautiful coastal village of Mapua, we
are surrounded by wineries, craft breweries, artists and food producers and are close to the
popular coastal section of the Tasman Great Taste Trail and the beautiful Moturoa/Rabbit
Island Beach and Recreation area. We are also centrally located between Nelson and Motueka
– approximately 20 mins to each.</p>
</div>
<div class="col-lg-6">
<p>Our rural sub-division is known for its bird life and here you will see Pukeko, quail, ducks,
plover, swallows, kingfisher, low flying hawks and in increasing numbers our wonderful
native birds such as the fantail and tui.</p>
<p>There are a number of cafes and restaurants within a short distance including the wonderful
Playhouse Café and Theatre. We also offer an optional tasting platter on the night of
arrival.</p>
<p>We are happy to share with you our love of New Zealand and especially the south island and
help you make plans for all the wonderful things to do and see in this area; we can also assist with bookings.
</p>
</div>
</div>


 </div>
</section>
<section id="bg-pic-1">
    <div class="container no-bg bright">
    <div class="col-md-8 col-md-offset-2">
    <div class="quote-overlay">
        <p class="quote">"Quiet, clean, modern, comfortable and lovely people too."</p><span class="quote-attribution">- Patrick (NZ)</span>

        <p class="quote">"Wonderful Stay! Great accommodations, delicious home baked goods, and a breathtaking view.</p><span class="quote-attribution">- Julia (US)</span>
    </div>
    </div>
    </div>
    </div>
</section>



<section id="house">
<h2 id="home-head">The Home</h2>
<div class="container">
<div class="row">
<div class="col-lg-6">
<p>Built in 2012 our home is a large, one level dwelling with two purpose built B&B rooms on the
eastern side. The house incorporates many eco features, which are:</p>
<ul class="list">
<li>Passive solar, thermally and energy efficient design</li>

<li>Thermally broken throughout the building envelope</li>

<li>Hybrid systems which includes power and water automated management</li>

<li>Solar panels for hot water and power</li>

<li>Non toxic building materials</li>

<li>Recycled Blue Gum wallboards</li>

<li>Uprated natural wool insulation</li>

<li>Low VOC paint and finishes</li>

<li>Energy efficient lighting and appliances</li>

<li>Recycled plastic bottle carpet in bedrooms</li>

<li>Pellet fire and panel heaters for heating when required</li>
</ul>
<p>Guests have their own parking area and entrance allowing for autonomy when needed. There
are a number of seating areas outside for relaxing and taking in the stunning views.  Our spa is
great to sit in at night where you can gaze at the twinkling night sky or the lights of Nelson. </p>
<p>Our home is full of beautiful art work in many mediums, a lot of which has been bought in the
‘top of the south’. We have a number of beautiful books on New Zealand, which are lovely to
sit and relax with and we have a number of board games to have fun with.</p>


</div>
<div class="col-lg-6">
	 @include('partials.carousel', array('images' => $house,'bg' => false, 'id' => 'house-cara'))
<p>Our garden is a large developing one.  At the front of the house there is a beautiful border
garden broken by an outdoor seating and fire area. In different areas around the house there
are natives, fruit trees, raised vegetable and herb gardens and a camellia hedge. The gully part
of the section contains mostly native shrubs, trees and grasses.</p>

</div>

</div>

</section>

<section id="rooms">
<h2 id="rooms-head">B&amp;B Rooms and Rates</h2>
<div class="container">
<div class="row">
<div class="col-lg-6">
<p>There are two luxurious rooms, the Red Room and Green Room, both with King beds. The bed in the Red Room is adjustable for firmness on each side.  </p>

<p>Each room has:</p>
<ul class="list">
<li>Beautiful ensuites</li>

<li>Table and chairs inside and out</li>

<li>Comfortable, supportive beds</li>

<li>Bamboo sheets and pillowcases</li>

<li>Handmade bedcovers</li>

<li>32” Samsung TV</li>

<li>DVD player with a selection of DVDs</li>

<li>CD/USB stereo system</li>

<li>Clock radio</li>

<li>Tea and coffee facilities with freshly ground coffee and baking daily</li>

<li>Small fridge with water and milk provided</li>

<li>Wardrobe and luggage racks</li>

<li>Original artwork</li>

<li>Free WiFi</li>

<li>Access to outside patio</li>


</ul>
<p>
*One load of washing included during stay.

</p>
<p>
<strong><em>Rates</em></strong><br/>
From $200 per night.<br/>
For direct bookings go to red Booking Button.
</p>



<p>
Children by prior arrangement only, thank you.
</p>
</div>
<div class="col-lg-6">
	 @include('partials.carousel', array('images' => $rooms,'bg' => false, 'id' => 'rooms-cara'))
     <p>
<strong><em>Cancellation Policy</em></strong><br/>
<ul>
<li>Two days prior to arrival: 50%</li>
<li>One day prior to arrival: 100%</li>
<li>No shows: 100%</li>
</ul>
</p>

</div>
</div>
</div>
</section>


<section id="bg-pic-2">
    <div class="container no-bg bright">
    <div class="col-md-8 col-md-offset-2">
    <div class="quote-overlay">
        <p class="quote">"Our hosts were very accommodating, friendly and helpful. The setting is magical has to be seen."</p><span class="quote-attribution">- David (GB)</span>

        <p class="quote">"Great room, wonderful views, excellent breakfast, charming hosts. It was just perfect"</p><span class="quote-attribution">- Bert (AU)</span>
    </div>
    </div>
    </div>
    </div>
</section>


<section id="todo">
<h2 id="todo-head">Things To Do</h2>
<div class="container">
<div class="row">
<div class="col-lg-6">
	 @include('partials.carousel', array('images' => $thingstodo,'bg' => false, 'id' => 'things-cara'))
</div>
<div class="col-lg-6 list">
<p>Below are just some of the things to do in this area. </p>
<ul class="list">

<li>Cycling: The Great Taste Trail <a href="http://www.trailjourneys.co.nz/nelson">www.trailjourneys.co.nz/nelson</a>

<a href="http://www.gentlecycling.co.nz">www.gentlecycling.co.nz</a>, <a href="http://www.wheeliefantastic.co.nz">www.wheeliefantastic.co.nz</a></li>

<li>Wineries (25) and Wine Tours www.baytoursnelson.co.nz <a href="http://www.nelsonwineart.co.nz">www.nelsonwineart.co.nz</a></li>

<li>Beer and Craft Breweries <a href="http://www.craftbrewingcapital.co.nz">www.craftbrewingcapital.co.nz</a></li>

<li>Art/Craft/Pottery Trails <a href="http://www.rubycoastarts.co.nz">www.rubycoastarts.co.nz</a></li>

<li>Boating and Kayaking <a href="http://www.abeltasmanseashuttles.co.nz">www.abeltasmanseashuttles.co.nz</a></li>

<li>Abel Tasman Excursions <a href="http://www.abeltasman.co.nz">www.abeltasman.co.nz</a>, <a href="www.abeltasman.co.nz/a-day/">www.abeltasman.co.nz/a-day</a></li>

<li>Mapua Ferry <a href="http://www.mapuaferry.co.nz">www.mapuaferry.co.nz</a></li>

<li>Tramping</li>


<li>Fishing: Sea and River</li>

<li>Golfing: A number of courses within a short distance. We have a male and female set of clubs.</a></li>

<li>Walks</a></li>

<li>Happy Valley Adventures <a href="http://www.happtvalleyadventures.co.nz">www.happtvalleyadventures.co.nz</a></li>

<li>Horse Riding <a href="http://www.blackbirdvly.co.nz">www.blackbirdvly.co.nz</a></li>

<li>Beaches</li>

<li>Markets <a href="http://www.nelsonmarket.co.nz">www.nelsonmarket.co.nz</a></li>

<li>Shopping: Richmond and Nelson both offer great shopping.</li>
</ul>
</div>
</div>
</section>

<section id="hosts">
<div class="container">
<div class="row">

<div class="col-lg-6">
<h2  class="bgh">&nbsp;</h2>
<h2  id="hosts-head">About Us</h2>
<img class="bg-image" src="{{ asset('images/hosts.jpg') }}" width="100%" alt="The Hosts, Barbara & Fraser Grant">
<p>Barbara and Fraser came from the bottom of the south, where they farmed, to the top of the
south over 16 years ago. Fraser works for Transfield Services during the week and Barbara
works 1-2 nights at a local restaurant. They enjoy: developing and maintaining their large
garden, being involved with a local theatre group, art, music, food, reading, travelling and
meeting new people. Their son lives in Dunedin and their daughter lives in Perth.</p>
</div>


<div class="col-lg-6">
<h2  class="bgh">&nbsp;</h2>
<h2  id="food-head">Food</h2>
	@include('partials.carousel', array('images' => $food,'bg' => false, 'id' => 'food-cara'))

<p>Choice of continental or full cooked breakfast. Talk to us about the options.</p>
<p>Fresh baking daily.</p>
<p>Optional: Tasting platter on arrival $35, must be pre-ordered.</p>
<p>* All dietary needs catered for. Gluten free cooking a specialty.
</p>


</div>
</div>
</div>
</section>




<section id="location">
	<h2  id="location-head">Location &amp; Contact</h2>
<div class="container">
<div class="row">
<div class="col-md-6">
<iframe src="https://www.google.com/maps/embed/v1/place?q=redvale%20ridge%20b%26b%20richmond&key=AIzaSyBcUlrIphw6eoWvKt_Ln7vEeeJkhgg-iL8"width="100%" height="450" frameborder="0" style="border:0" id="googleMap"></iframe>
</div>

<div class="col-md-6">

<div>
<p><strong>Bookings</strong> Book directly using the contact details below</p>
<p><strong>Phone</strong> <a href="tel:+64035446478">+64 224 566 478</a></p>
<p><strong>Email</strong> <a href="mailto:redvaleridge@gmail.com">redvaleridge@gmail.com</a></p>
<p><strong>Address</strong><br/>

114 Redvale Rd<br/>
Galeo Estate<br/>
Redwood Valley<br/>
Tasman<br/>
South Island<br/>
New Zealand
 </p>

</div>
</div>
</div>
</div>
</section>


@stop