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

<!--@if(!Auth::check())-->
  
  <form class="form-horizontal well" method="POST" action="{{ route('cv.update', [$cv->id]) }}">
    
  <input type="hidden" name="_token" value="{{ csrf_token() }}">  
  <input type="hidden" name="_method" value="PUT">
    
    <legend>Update CV</legend>

    <div class="form-group">
      <label for="about" class="col-lg-2 control-label">About</label>
      <div class="col-lg-10">
        <textarea type="text" class="form-control" id="about" name="about">{{ $cv->about }}</textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="personal" class="col-lg-2 control-label">Personal</label>
      <div class="col-lg-10">
        <textarea type="text" class="form-control" id="personal" name="personal">{{ $cv->personal }}</textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="education" class="col-lg-2 control-label">Education</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="education" id="education">{{ $cv->education }}</textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="expiriance" class="col-lg-2 control-label">Expiriance</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="expiriance" id="expiriance">{{ $cv->expiriance }}</textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="lang" class="col-lg-2 control-label">Languages</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="lang" id="lang">{{ $cv->lang }}</textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="skills" class="col-lg-2 control-label">Programing skills</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="skills" id="skills">{{ $cv->skills }}</textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Update CV</button>
      </div>
    </div>
   
</form>

<!--@endif-->
@stop