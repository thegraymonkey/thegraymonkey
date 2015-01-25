<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   	
    <link rel="icon" href="../../favicon.ico">

    <title>TheGrayMonkey</title>

    <!-- Bootstrap core CSS -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    
      <link href="/bootstrap/css/sticky-footer-navbar.css" rel="stylesheet">
    @yield('top_css')

  </head>
<!-- NAVBAR
================================================== -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">    
		<div class="container" >
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
          		</button>

				<a class="navbar-brand" href="{{ url('/')}}">TheGrayMonkey</a>
				
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li @if($current_page === 'posts')class="active"@endif><a href="{{ url('posts') }}">Blog</a></li>            
					<li @if($current_page === 'projects')class="active"@endif><a href="{{ url('projects') }}">Projects</a></li>            
					<li @if($current_page === 'cv')class="active"@endif><a href="{{ url('cv') }}">CV</a></li>
					<li @if($current_page === 'contacts')class="active"@endif><a href="{{ url('contacts') }}">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right"> 
					@if(Auth::check())					
					<li><a href="{{ url('auth/logout') }}">Logout</a></li>
					@else
					<li @if($current_page === 'srb')class="active"@endif><a href="{{ url('srb') }}"><img src="/images/srb.png" alt="srb"></a></li>
					<li @if($current_page === 'auth.login')class="active"@endif><a href="{{ url('auth/login') }}">Login</a></li>
					@endif
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

		

	
	
  		
	@yield('intro')
	
		
	
	

	<div class="container">
		
				@yield('content')
					
	</div>


	

	<footer class="footer">
    <div class="container">
    	
      	<div class="col-lg-4">
        	<h4 class="text-muted">TheGrayMonkey.com</h4>
       </div>
        <div class="col-lg-8">
        <ul class="nav nav-pills pull-right">
  		
  		<li><a href="https://www.facebook.com/andjelko.stefanov" target="blank"><h5>Facebook</h5></a></li>
  		<li><a href="https://www.linkedin.com/pub/andjelko-stefanov/a0/8ab/2b4?domainCountryName=&csrfToken=ajax%3A0290766932108895506" target="blank"><h5>LinkedIn</h5></a></li>
  		<li><a href="https://twitter.com/thegraymonkey" target="blank"><h5>Twiter</h5></a></li>
  		<li><a href="https://github.com/thegraymonkey" target="blank"><h5>GitHub</h5></a></li>
  		</ul>
  		</div>
						
    </div>
    </footer>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/bootstrap/js/docs.min.js"></script>
	@yield('bottom_js')
</body>
</html>