<?php
require_once "config.php"; 
require_once "html.php"; 

if (isset($_POST['submit'])) {
  if (empty($_POST['title']) || empty($_POST['description']) || empty($_POST['img'])) {
    echo "Some inputs are empty";
  }else {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $img = $_POST['img'];
  }
}

?>

<?php html::doctype(); ?>
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
    	<div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Create Photo
            </h2>
        </div>
        <div class="row mb-4">


	     <form method="POST" action="create.php" enctype="multipart/form-data">
	              <!-- Email input -->
	              <div class="form-outline mb-4">
	                <input type="text" name="title" id="form2Example1" class="form-control" placeholder="title" />
	               
	              </div>

	             

	              <div class="form-outline mb-4">
	                <textarea type="text" name="description" id="form2Example1" class="form-control" placeholder="description" rows="8"></textarea>
	            </div>
	           

	              
	             <div class="form-outline mb-4">
	                <input type="file" name="img" id="form2Example1" class="form-control" placeholder="image" />
	            </div>


	              <!-- Submit button -->
	              <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>

	          
	            </form>
		</div>
	</div>

    <?php require_once("includes/footer.php"); ?>
</body>
</html>