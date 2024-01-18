@extends('layouts.app')
@section('content')



<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="/project/public/">Home</a></li>
            <li>Gallery</li>
          </ol>
        </div>

      </div>
    </section>
<section id="portfolio" class="portfolio ">
    <div class="container">
<h1 class="text-center ">All Projects</h1>

        <hr>

        <div class="row">
            @foreach($projects as $project)
                <div class="col-md-4 mb-4">
                    <div class="card">
                      <a href="{{ asset('public/' . $project->images) }}" data-lightbox="photos">  <img src="{{ asset('public/' . $project->images) }}" alt="{{ $project->name }}" class="card-img-top img-fluid"></a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->name }}</h5>
                            <p class="card-text">{{ $project->description }}</p>
                          
                        </div>
                    </div>
                </div>
    @endforeach
        </div>
</section>
</body>
</html>

@endsection