@extends('layout')

@section('intro')
	
		@include('common.intro', [
		'intro_title' => 'Welcome GrayMonkey!',
		'intro_subtitle' => 'Login to write posts or add projects... but if you are not TheGrayMonkey...',
		'intro_image' => 'pekman5.jpg'   
	])
	
@stop

@section('content')

@include('common.messages')

<form class="form-horizontal well" action="{{ url('auth/login') }}" method="POST">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">  
  
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
        <div class="checkbox">
          <label>
            <input name="remember" value="1" type="checkbox"> Remember me
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

</form>

@stop