@extends('layouts.app')
@section('content')
<style>
    
    .card img {
        transition: transform 0.3s ease;
    }

</style>

<section id="portfolio" class="portfolio mt-5">
    <div class="container">

        <form action="/project/public/projects" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="images">Add Project Image:</label>
                    <input type="file" name="images" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="name">Add Project Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Project Name">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="description">Add Project Description:</label>
                <textarea id="description" class="form-control" name="description" placeholder="Enter your description here..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
        

        <h1 class="mt-4 ">All Projects</h1>
        <hr>
        <div class="row">
            @foreach($projects as $project)
                <div class="col-md-4 mb-4">
                    <div class="card">
                      <a href="{{ asset('public/' . $project->images) }}" data-lightbox="photos">  <img src="{{ asset('public/' . $project->images) }}" alt="{{ $project->name }}" class="card-img-top img-fluid"></a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->name }}</h5>
                            <p class="card-text">{{ $project->description }}</p>
                            <a href="http://localhost/project/public/project_edit/{{$project->id}}" class="btn btn-info">Edit</a>
                            <a href="http://localhost/project/public/project_delete/{{$project->id}}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection