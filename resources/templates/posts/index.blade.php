@extends('layout')

@section('intro')
	
		@include('common.intro', [
		'intro_title' => 'My personal blog!',
		'intro_subtitle' => 'I write about economy, programing, sports and poker...',
		'intro_image' => 'pekman2.jpg'  
	])


	
@stop

@section('content')

@include('common.messages')

@include('posts.create')

@foreach($posts as $post)
	<div class="blog-post">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ $post->created_at }} by <strong>Andjelko</strong></p>
            <blockquote>
              <p>{{ $post->description }}</p>
            </blockquote>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
    </div>
    <img source>


    <!-- /.blog-post -->



<hr>
@endforeach



@stop