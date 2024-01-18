@extends('layouts.app')

@section('content')

<section id="about" class="about">
      <div class="container mt-5" data-aos="fade-up">

        <div class="section-title">
         

        <div class="row">
          <div class="col-lg-4">
<form action="/project/public/upload" method="POST" enctype="multipart/form-data">
    @csrf
    
    <input type="file" name="image" class="form-control" required>
    <input type="submit" name="upload" class="form-control btn btn-primary mt-2">
</form>

</div>
        </div>

      </div>
      <hr>

      <div class="row">

      @foreach($photos as $photo)
      <div class="col-sm-4">
<img  class="img-thumbnail" src="{{asset('storage/images/'.$photo->name)}}" alt="">
<a href="http://localhost/project/public/photo_delete/{{$photo->id}}" class="btn btn-danger">Delete</a>

      </div>
@endforeach
      </div>
    </section>

@endsection