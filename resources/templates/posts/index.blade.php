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
            <p>{!! $post->content !!}</p>

    <!-- /.blog-post -->
		
			<form action="{{ route('posts.destroy', [$post->id]) }}" method="post">
				<input type="hidden" name="_method" value="delete">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" value="Delete" class="btn btn-danger">
			</form>
			
			<div>
				<a class="btn btn-warning" href="{{ route('posts.edit', [$post->id]) }}">Edit</a>
			</div>	
	</div>	
		


<hr>
@endforeach



@stop