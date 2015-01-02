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
    <link href="/bootstrap/css/carousel.css" rel="stylesheet">
    @yield('top_css')

  </head>
<!-- NAVBAR
================================================== -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">    
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
					<li @if($current_page === 'posts.index')class="active"@endif><a href="{{ url('posts.index') }}">Blog</a></li>            
					<li @if($current_page === 'projects.index')class="active"@endif><a href="{{ url('projects.index') }}">Projects</a></li>            
					<li @if($current_page === 'cv.index')class="active"@endif><a href="{{ url('cv.index') }}">CV</a></li>
					<li @if($current_page === 'contacts.index')class="active"@endif><a href="{{ url('contacts.index')}}">Contact</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right"> 
					@if(Auth::check()) 
					<li><a href="{{ url('auth/logout') }}">Logout</a></li>
					@else
					<li><img src="" alt="srb"></li>
					<li @if($current_page === 'auth.login')class="active"@endif><a href="{{ url('auth/login') }}">Prijava</a></li>
					@endif
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

		

	@yield('home')

	
  		
	@yield('intro')
	
		
	
	

	<div class="container">
		
				@yield('content')
					
	</div>


	<hr class="featurette-divider">

	<footer class="sticky-footer">
    <div class="container">
      	<div class="row">
        
    		<div class="col-lg-5">
        		<h4 class="text-muted">Powered by <a href="#">TheGrayMonkey</a></h4>
			</div>
			<div class="col-lg-7">
        		<h4 class="pull-right"><a href="#">Početak strane</a></h4>
    		</div>
		</div>      
    </div>
    </footer>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/bootstrap/js/docs.min.js"></script>
	@yield('bottom_js')
</body>
</html>