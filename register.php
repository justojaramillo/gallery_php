<?php 
require_once "config.php"; 
require_once "html.php"; 

if (isset($_SESSION["username"])) {
  header("location: index.php");
}

if (isset($_POST["submit"])) {
  if ($_POST["email"]== '' || $_POST["username"]=='' || $_POST["password"]=='') {
    echo "Some inputs are empty";
  }else {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $passwd = $_POST["password"];

    $insert = $conn->prepare("INSERT INTO users(email, username, passwd) VALUES (:email, :username, :passwd)");
    $insert->execute([":email"=>$email, ":username"=>$username, ":passwd"=>password_hash($passwd,PASSWORD_DEFAULT)]);
  }
}
?>


<html lang="en">
 <?php require_once("includes/head.php"); ?>
 <body>
 <?php require_once("includes/header.php"); ?>

<main class="form-signin w-50 m-auto">
  <form method="POST" action="register.php">
   
    <h1 class="h3 mt-5 fw-normal text-center mb-5">Please Register</h1>

    <div class="form-floating mb-2">
      <label for="floatingInput">Email address</label>
      <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    </div>

    <div class="form-floating mb-2">
      <label for="floatingInput">Username</label>
      <input name="username" type="text" class="form-control" id="floatingInput" placeholder="username">
    </div>

    <div class="form-floating mb-5">
      <label for="floatingPassword">Password</label>
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
    </div>

    <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">register</button>
    <h6 class="mt-3">Aleardy have an account?  <a href="login.php">Login</a></h6>

  </form>
</main>
<?php require "includes/footer.php"; ?>
