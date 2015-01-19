@extends('layout')

@section('intro')
	
		@include('common.intro', [
		'intro_title' => 'Andjelko Stefanov',
		'intro_subtitle' => 'curriculum vitae',
		'intro_image' => 'pekman4.jpg'
	])
	
@stop

@section('content')

@include('common.messages')



@foreach($cvs as $cv)
	<div class="jumbotron">
		<h2>About:</h2>
		<p>{!! $cv->about !!}</p>
	</div>
	<div class="jumbotron">
		<h2>Personal:</h2>
		<p>{!! $cv->personal !!}</p>
	</div>
	<div class="jumbotron">
		<h2>Education:</h2>
		<p>{!! $cv->education !!}</p>
	</div>
	<div class="jumbotron">
		<h2>Expiriance:</h2>
		<p>{!! $cv->expiriance !!}</p>
	</div>
	<div class="jumbotron">
		<h2>Languages:</h2>
		<p>{!! $cv->lang !!}</p>
	</div>
	<div class="jumbotron">
		<h2>Programing skills:</h2>
		<p>{!! $cv->skills !!}</p>
	</div>
	
	@if(Auth::check())	
	<div>
		<a class="btn btn-warning" style="margin-bottom:10px;" href="{{ route('cv.edit', [$cv->id]) }}">Edit</a>
	</div>
	@endif
@endforeach

@stop