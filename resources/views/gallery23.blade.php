@extends('layouts.app')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Gallery</h2>
          <ol>
            <li><a href="/project/public/">Home</a></li>
            <li>Gallery</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Medical Camps</li>
              <li data-filter=".filter-card">Monthly Food Package for Widow</li>
              <li data-filter=".filter-web">Skill Based Certifications</li> <br>
              
              

            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/greenfoundationpic/mhana rashan/1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>Mahana Rashan</h4> -->
              <p>Mahana Rashan</p>
              <a href="assets/img/portfolio/greenfoundationpic/mhana rashan/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/greenfoundationpic/mhana rashan/3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>Web 3</h4> -->
              <p>Mahana Rashan</p>
              <a href="assets/img/portfolio/greenfoundationpic/STUDANT 1/s3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/greenfoundationpic/orphan girls/1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>App 2</h4> -->
              <p>Orphan Girls</p>
              <a href="assets/img/portfolio/greenfoundationpic/orphan girls/4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/greenfoundationpic/FREE MANDI CAL/5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>Card 2</h4> -->
              <p>Free Mandi Cell</p>
              <a href="assets/img/portfolio/greenfoundationpic/FREE MANDI CAL/1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/greenfoundationpic/lebarti camp/1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>Web 2</h4> -->
              <p>Free libratory Camp</p>
              <a href="assets/img/portfolio/greenfoundationpic/lebarti camp/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/greenfoundationpic/lebarti camp/3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>App 3</h4> -->

              <p>Free libratory Camp</p>
              <a href="assets/img/portfolio/greenfoundationpic/FREE MANDI CAL/5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/project/3.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>Card 1</h4> -->
              <p>Free Camp</p>
              <a href="assets/img/project/3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/greenfoundationpic/STUDANT 1/20170116_111926.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>Card 3</h4> -->
              <p>Students</p>
              <a href="assets/img/portfolio/greenfoundationpic/STUDANT 1/3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/greenfoundationpic/lebarti camp/2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>Web 3</h4> -->
              <p>Free Libratory Camp</p>
              <a href="assets/img/portfolio/greenfoundationpic/lebarti camp/3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title=""><i class="bx bx-plus"></i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

        </div>

      </div>
    </section> <!-- End Portfolio Section -->

  </main><!-- End #main -->

  @endsection