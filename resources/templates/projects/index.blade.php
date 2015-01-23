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
<h1>{{ $project->title }}</h1>
<img src="{{ url($project->getImagePath()) }}" class="img-thumbnail">
@endforeach

@stop