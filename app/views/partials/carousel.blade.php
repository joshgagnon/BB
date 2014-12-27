<div id="about-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#about-carousel" data-slide-to="0" class="active"></li>
    @for ($i = 1; $i < count($images); $i++)
    <li data-target="#about-carousel" data-slide-to="{{ $i }}"></li>
    @endfor
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  @foreach($images as $image)
 
      <div class="item {{{ $image == $images[0] ?  'active' : '' }}}">
        <img src="{{ asset($image) }}" alt="..." >
        <div class="carousel-caption">
      
        </div>
      </div>
   
    @endforeach
   </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#about-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#about-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->