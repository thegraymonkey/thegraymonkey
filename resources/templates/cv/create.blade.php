<!--@if(!Auth::check())-->
  
  <form class="form-horizontal well" method="POST" action="{{ route('cv.store') }}">
    
  <input type="hidden" name="_token" value="{{ csrf_token() }}">  

    <legend>Create CV</legend>

    <div class="form-group">
      <label for="about" class="col-lg-2 control-label">About</label>
      <div class="col-lg-10">
        <textarea type="text" class="form-control" id="about" name="about" placeholder="About"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="personal" class="col-lg-2 control-label">Personal</label>
      <div class="col-lg-10">
        <textarea type="text" class="form-control" id="personal" name="personal" placeholder="Personal"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="education" class="col-lg-2 control-label">Education</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="education" id="education" placeholder="Education"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="expiriance" class="col-lg-2 control-label">Expiriance</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="expiriance" id="expiriance" placeholder="Expiriance"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="lang" class="col-lg-2 control-label">Languages</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="lang" id="lang" placeholder="Languages"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="skills" class="col-lg-2 control-label">Programing skills</label>
      <div class="col-lg-10">
        <textarea class="form-control" name="skills" id="skills" placeholder="Programing skills"></textarea>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
   
  
</form>

<!--@endif-->