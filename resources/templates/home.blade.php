@extends('layout')

<div style="margin-top:50px; " id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="/images/welcome1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Programing language I'm studying</h1>
              <p>I am open for any form of hire or cooperation!</p>
              <p><a class="btn btn-lg btn-primary" href="http://php.net/" role="button">PHP manual</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/images/welcome2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>My great new love</h1>
              <p>Waiting for Laravel 5 with great anticipation.</p>
              <p><a class="btn btn-lg btn-primary" href="http://laravel.com/docs/master" role="button">Laravel documentation</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/images/welcome3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>My interests</h1>
              <p>Programing, economy, marketing, football & poker</p>
              <p><a class="btn btn-lg btn-primary" href="{{ url('contacts') }}" role="button">Contact me</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="/images/heading1.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>This is me</h2>
          <p>I am Economy graduate </br>and programing enthusiast</p>
          <p><a class="btn btn-default" href="{{ url('cv') }}" role="button">--CV--</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="/images/heading2.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>This is also me</h2>
          <p><strong>I need help</strong></br>I need to make a logo out of this fella</p>
          <p><a class="btn btn-default" href="/images/heading2.jpg" target="blank" role="button">Help</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="/images/heading3.jpg" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Latest project</h2>
          <p>Comunity website, forum, support group... </br>Final stages of development.</p>
          <p><a class="btn btn-default" href="{{ url('projects') }}" role="button">Read more</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
      <h1>My aims and causes</h1>
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 style="margin-top:100px;" class="featurette-heading">Make great web apps!<span class="text-muted"> Everyday!</span></h2>
          <p class="lead"></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="/images/feauture1.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img style="margin-top:50px" class="featurette-image img-responsive" src="/images/feauture2.png" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Play EPT.<span class="text-muted"> Satelite in only.</span></h2>
          <p class="lead"> the first ever EPT took place in Casino de Barcelona in September 2004 when 229 players competed for a first prize of €80,000. Swedish player Alex Stevic took down the Main Event after a four hour plus heads-up battle against Irishman, Dave O’Callaghan - still one of the longest heads-up duels in EPT history.<br> <a href="http://www.europeanpokertour.com/" target="blank">European Poker Tour</a></p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 style="margin-top:100px;" class="featurette-heading">Save Pandas!<span class="text-muted"> Adopt Panda!</span></h2>
          <p class="lead">Adopting a panda is a fun and easy way to have a direct impact on the daily life and care of our beloved pandas. While it is a symbolic adoption, your panda adoption is still a personal choice. You may have a specific panda in mind to adopt, or you can select from the many adults and cubs available for adoption. They all need to be taken care of and loved! If you know the name of the panda you’d like to adopt but don’t see him or her listed here, just send us an email! <br><a href="http://www.pandasinternational.org/" target="blank">Pandas International</a></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="/images/feauture3.png" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      

      <!-- /END THE FEATURETTES -->

      </div>
       <!-- /.container -->
