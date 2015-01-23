@if(Auth::check())

<form class="form-horizontal well" method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
  
<input type="hidden" name="_token" value="{{ csrf_token() }}">  

    <legend>Create a new project</legend>

    <div class="form-group">
      <label for="title" class="col-lg-2 control-label">Title</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="title" id="title" placeholder="Title" required autofocus>
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
      <label for="img_description" class="col-lg-2 control-label">Image description</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="img_description" id="img_description" placeholder="Image Description">
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

@endif