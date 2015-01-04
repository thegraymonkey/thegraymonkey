@extends('layout')

@section('intro')
	
		@include('common.intro', [
		'intro_title' => 'My projects!',
		'intro_subtitle' => 'Let me present you projects I am working on or I worked on...',
		'intro_image' => 'pekman3.jpg'  
	])
	

@section('content')

@include('projects.create')

@stop