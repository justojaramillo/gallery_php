<?php
require_once "config.php"; 
require_once "html.php";



?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("includes/head.php"); ?>
<body>
<?php require_once("includes/header.php"); ?>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">
       <!--  <form class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form> -->
    </div>

    <div class="container tm-container-content tm-mt-60">
        <?php
        if (isset($_GET['image_id'])) {
            $image_id = $_GET['image_id'];
            $select = $conn->prepare("SELECT * FROM image WHERE image_id=:image_id");
            $select->execute([":image_id"=>$image_id]);
            $row = $select->fetch(PDO::FETCH_OBJ);

            $select_all = $conn->prepare("SELECT * FROM image WHERE image_id<>:image_id");
            $select_all->execute([":image_id"=>$image_id]);
            $all_images = $select_all->fetchAll(PDO::FETCH_OBJ);
        }
        ?>
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary"><?= $row->title ?></h2>
        </div>
        <div class="row tm-mb-90">            
            <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
                <img src="img/<?= $row->image ?>" alt="Image" class="img-fluid">
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                <div class="tm-bg-gray tm-video-details">
                  
                    <div class="mb-4">
                        <h3 class="tm-text-gray-dark">Description</h3>
                        <p><?= substr($row->description,0,300) ?></p>
                    </div>
                   
                </div>
            </div>

          
        </div>
        <div class="row mb-4">
            <h2 class="col-12 tm-text-primary">
                Explore More Photos
            </h2>
        </div>
        <div class="row mb-3 tm-gallery">
            <?php foreach($all_images as $image): ?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="img/<?= $image->image; ?>" alt="Image" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2><?= $image->title; ?></h2>
                        <a href="photo-detail.php?image_id=<?= $image->image_id ?>">View more</a>
                    </figcaption>                    
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light"><?= date_format(date_create($row->created_at),"M, d, Y"); ?></span>
                    <span>by <?= $image->username; ?></span>
                </div>
            </div>
            <?php endforeach; ?>
        </div> <!-- row -->
    </div> <!-- container-fluid, tm-container-content -->

    <?php require_once("includes/footer.php"); ?>
</body>
</html>