@extends('layout')

@section('intro')
	
		@include('common.intro', [
		'intro_title' => 'Andjelko Stefanov',
		'intro_subtitle' => 'curriculum vitae',
		'intro_image' => 'pekman4.jpg'
	])
	
@stop