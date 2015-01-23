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

@if(Auth::check())

<form class="form-horizontal well" method="POST" action="{{ route('projects.update', [$project->id]) }}" enctype="multipart/form-data">
  
<input type="hidden" name="_token" value="{{ csrf_token() }}">  

    <legend>Create a new project</legend>

    <div class="form-group">
      <label for="title" class="col-lg-2 control-label">Title</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="title" id="title" placeholder="Title" required autofocus value="{{ $project->title }}">
      </div>
    </div>
    <div class="form-group">
      <label for="description" class="col-lg-2 control-label">Description</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="description" id="description" placeholder="Description">
      </div>
    </div>
    <div class="form-group">
      <label for="content" class="col-lg-2 control-label">Content</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="content" id="content"></textarea>
      </div>
    </div>
    <div class="form-group">  
      <label for="photo" class="col-lg-2 control-label">Image</label>
      <div class="col-lg-10">
        <input class="form-control" type="file" name="photo" id="photo">
      </div>
    </div>
    <div class="form-group">
      <label for="image_description" class="col-lg-2 control-label">Image description</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="image_description" id="image_description" placeholder="Image Description">
      </div>
    </div>
    <div class="form-group">
      <label for="link" class="col-lg-2 control-label">Link</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="link" id="link" placeholder="Link">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
   
</form>

@else

<p class="alert alert-danger">YOU HAVE TO BE LOGGED IN TO EDIT ANYTHING YOU SHOULD KNOW BETTER MONKEY!!!</p>
	
@endif

@stop