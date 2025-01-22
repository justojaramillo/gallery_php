<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
require_once("config.php");
require_once("html.php");
?>
<?php html::doctype(); ?>
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

    <?php
    $select = $conn->prepare("SELECT * FROM image");
    $select->execute();
    $rows = $select->fetchAll(PDO::FETCH_OBJ);
    ?>
    <div class="container tm-container-content tm-mt-60">
      <div class="row mb-4">
        <h2 class="col-6 tm-text-primary">Latest Photos</h2>
      </div>


      <div class="row tm-mb-90 tm-gallery">
        <?php foreach($rows as $row): ?>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
          <figure class="effect-ming tm-video-item">
            <img src="img/<?= $row->image; ?>" alt="Image" class="img-fluid" />
            <figcaption
              class="d-flex align-items-center justify-content-center"
            >
              <h2><?= $row->title; ?></h2>
              <a href="photo-detail.php?image_id=<?= $row->image_id; ?>">View more</a>
            </figcaption>
          </figure>
          <div class="d-flex justify-content-between tm-text-gray">
            <span class="tm-text-gray-light"><?= date_format(date_create($row->created_at),"M, d, Y"); ?></span>
            <span>by <?= $row->username; ?></span>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <!-- row -->
    </div>
    <!-- container-fluid, tm-container-content -->

    <?php require_once("includes/footer.php"); ?>
  </body>
</html>
