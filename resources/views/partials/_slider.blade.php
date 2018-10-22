
<div id="carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ asset('/images/slides/3.jpg') }}" alt="Grahaya Panti Asuhan" class="img-responsive">
      <!-- <img src="{{ asset('/images/slideshow/ss1.jpg') }}" alt="Good shoes take you to good places" class="img-responsive"> -->
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <!-- <img src="http://dummyimage.com/1366X600/aaa/fff&text=slide2" alt="Shoes speak louder than words" class="img-responsive"> -->
      <img src="{{ asset('/images/slides/4.jpg') }}" alt="Grahaya Panti Asuhan" class="img-responsive">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('/images/slides/5.jpg') }}" alt="Grahaya Panti Asuhan" class="img-responsive">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('/images/slides/6.jpg') }}" alt="Grahaya Panti Asuhan" class="img-responsive">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>