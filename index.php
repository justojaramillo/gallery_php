<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
require_once("html.php");
?>
<!DOCTYPE html>
<html lang="en">
  <?php require_once("includes/head.php"); ?>
  <body>
    <?php require_once("includes/header.php"); ?>

    <div
      class="tm-hero d-flex justify-content-center align-items-center"
      data-parallax="scroll"
      data-image-src="img/hero.jpg"
    >
      <!--  <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form> -->
    </div>

    <div class="container tm-container-content tm-mt-60">
      <div class="row mb-4">
        <h2 class="col-6 tm-text-primary">Latest Photos</h2>
      </div>
      <div class="row tm-mb-90 tm-gallery">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
          <figure class="effect-ming tm-video-item">
            <img src="img/img-03.jpg" alt="Image" class="img-fluid" />
            <figcaption
              class="d-flex align-items-center justify-content-center"
            >
              <h2>Clocks</h2>
              <a href="photo-detail.html">View more</a>
            </figcaption>
          </figure>
          <div class="d-flex justify-content-between tm-text-gray">
            <span class="tm-text-gray-light">18 Oct 2020</span>
            <span>by Mohamed Hassan</span>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
          <figure class="effect-ming tm-video-item">
            <img src="img/img-04.jpg" alt="Image" class="img-fluid" />
            <figcaption
              class="d-flex align-items-center justify-content-center"
            >
              <h2>Plants</h2>
              <a href="photo-detail.html">View more</a>
            </figcaption>
          </figure>
          <div class="d-flex justify-content-between tm-text-gray">
            <span class="tm-text-gray-light">14 Oct 2020</span>
            <span>by Mohamed Hassan</span>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
          <figure class="effect-ming tm-video-item">
            <img src="img/img-05.jpg" alt="Image" class="img-fluid" />
            <figcaption
              class="d-flex align-items-center justify-content-center"
            >
              <h2>Morning</h2>
              <a href="photo-detail.html">View more</a>
            </figcaption>
          </figure>
          <div class="d-flex justify-content-between tm-text-gray">
            <span class="tm-text-gray-light">12 Oct 2020</span>
            <span>by Mohamed Hassan</span>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
          <figure class="effect-ming tm-video-item">
            <img src="img/img-06.jpg" alt="Image" class="img-fluid" />
            <figcaption
              class="d-flex align-items-center justify-content-center"
            >
              <h2>Pinky</h2>
              <a href="photo-detail.html">View more</a>
            </figcaption>
          </figure>
          <div class="d-flex justify-content-between tm-text-gray">
            <span class="tm-text-gray-light">10 Oct 2020</span>
            <span>by Mohamed Hassan</span>
          </div>
        </div>
      </div>
      <!-- row -->
    </div>
    <!-- container-fluid, tm-container-content -->

    <?php require_once("includes/footer.php"); ?>
  </body>
</html>
