@extends('layouts.app')
@section('content')


<section id="portfolio" class="portfolio mt-5">
      <div class="container">

<form action="http://localhost/project/public/edit_post" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group col-md-8">
    <input type="file" name="images" class="form-control">



    
    <input type="text" name="name" value="{{$project->name}}" class="form-control" placeholder="Enter Project Name">
    
  </div>
  <div class="form-group col-md-8">
        <textarea id="description" class="form-control" name="description"   required>{{$project->description}}</textarea>
<input type="hidden" name="id" value="{{$project->id}}">
        <input type="submit" value="Submit" name="submit" class="form-control btn btn-primary" >

       
      
    </div>
    </div>
  </div>
  
    
</div>


</form>


</div>

</section>

@endsection