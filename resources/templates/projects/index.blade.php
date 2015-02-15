@extends('layout')

@section('intro')
	
		@include('common.intro', [
		'intro_title' => 'My projects!',
		'intro_subtitle' => 'Let me present you projects I am working on or I worked on...',
		'intro_image' => 'pekman3.jpg'  
	])
	

@section('content')

@include('common.messages')

@include('projects.create')

@foreach($projects as $project)
<div  class="blog-post">
	<div class="container">
		<div style="margin-bottom:25px" class="row">
			<div class="col-md-6">
		        <h1 class="blog-post-title">{{ $project->title }}</h1>
		        <p class="blog-post-meta">{{ $project->created_at }} by <strong>Andjelko</strong></p>
		            <blockquote>
		              <p>{{ $project->description }}</p>
		            </blockquote>
		            <p> {{ $project->content }}</p>
		    </div>
		    <div class="col-md-6">
		    	<div style="margin-top:25px">
		    	<a class="fancybox" rel="group1" title="{{ $project->img_description }}" href="{{ $project->getImagePath() }}">
				<img src="{{ url($project->getImagePath()) }}" class="img-thumbnail">
				</a>
				<a style="margin-left:250px" target="blank" href="{{ $project->link }}">See it online</a>
				</div>
			</div>	

			
		</div>
	</div>
</div>


@if(Auth::check())
			<form action="{{ route('projects.destroy', [$project->id]) }}" method="post">
				<input type="hidden" name="_method" value="delete">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" value="Delete" class="btn btn-danger">
			</form>
			
			<div>
				<a class="btn btn-warning" href="{{ route('projects.edit', [$project->id]) }}">Edit</a>
			</div>	
		@endif

<hr>
@endforeach



@stop

@section('bottom_js')
	<script type="text/javascript" src="{{ asset('assets/fancybox/source/jquery.fancybox.js') }}"></script>
	<script type="text/javascript">
		$(".fancybox").fancybox();
	</script>
@stop


@section('top_css')
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fancybox/source/jquery.fancybox.css') }}">
@stop