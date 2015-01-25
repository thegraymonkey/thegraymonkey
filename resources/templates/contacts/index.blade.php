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
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required autofocus>
    </div>

    <div class="form-group">
      <label for="subject">Subject</label>
      <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
    </div>

    <div class="form-group">
      <label for="message">Message</label>
      <textarea class="form-control" type="text" id="message" placeholder="Message" name="message"></textarea>
    </div>
    
    <div class="form-group">
    <button type="submit" class="btn btn-primary">Send message</button>
    </div>

  </form>


  
  	



@stop