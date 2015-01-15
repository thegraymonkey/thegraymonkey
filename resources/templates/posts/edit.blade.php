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

<form method="POST" class="form-horizontal well" action="{{ route('posts.update', [$post->id]) }}">
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="PUT">

	<legend>Edit blog post</legend>

    <div class="form-group">
      <label for="title" class="col-lg-2 control-label">Title</label>
      <div class="col-lg-10">
        <textarea type="text" class="form-control" id="title" name="title" >{{ $post->title }}</textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="description" class="col-lg-2 control-label">Description</label>
      <div class="col-lg-10">
        <textarea type="text" class="form-control" id="description" name="description" >{{ $post->description }}</textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="content" class="col-lg-2 control-label">Content</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="content" id="content">{{ $post->content }}</textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </div>

	

@stop