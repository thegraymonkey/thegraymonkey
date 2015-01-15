@extends('layout')

@section('intro')
	
		@include('common.intro', [
		'intro_title' => 'Contact me',
		'intro_subtitle' => 'Don\'t hesitate to contact me whatever the matter is...',
		'intro_image' => 'pekman1.jpg'  
	])
	
@stop

@section('content')

@include('common.messages')

<form role="form" action="{{ url('contacts/send') }}" method="POST">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <div class="form-group">
      <label for="email">E-mejl adresa</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email">
    </div>

    <div class="form-group">
      <label for="subject">Predmet</label>
      <input type="text" class="form-control" id="subject" placeholder="Predmet" name="subject">
    </div>

    <div class="form-group">
      <label for="message">Poruka</label>
      <textarea class="form-control" type="text" id="message" placeholder="Poruka" name="message"></textarea>
    </div>
    
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Pošalji</button>
    </div>

  </form>


  
  	



@stop