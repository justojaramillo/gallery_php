<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
if (isset($_SESSION["username"])) {
  header("location: index.php");
}
require_once "config.php"; 



if (isset($_POST["submit"])) {
  
  if ($_POST["email"]=='' OR $_POST["password"]=='') {
    echo "Some inputs are empty";
  } else {
    $email = $_POST["email"];
    $passwd = $_POST["password"];

    $login = $conn->query("SELECT * FROM user WHERE email='$email'");
    $login->execute();
    $data = $login->fetch(PDO::FETCH_ASSOC);

    if ($login->rowCount()>0) {
      if (password_verify($passwd, $data["password"])) {
        $_SESSION["user_id"] = $data["user_id"];
        $_SESSION["username"] = $data["username"];
        $_SESSION["email"] = $data["email"];
        header("location: index.php");
      }else{
        echo "Email or Password is wrong.";
      }
    }else{
      echo "Email or Password is wrong.";
    }

  }
  
}


?>
<!DOCTYPE html>
<html lang="en">
<?php require_once("includes/head.php"); ?>
<body>
<?php require_once("includes/header.php"); ?>
  <main class="form-signin w-50 m-auto">
    <form method="post" action="login.php">
      <!-- <img class="mb-4 text-center" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
      <h1 class="h3 mt-5 fw-normal text-center mb-5">Please log in</h1>

      <div class="form-floating mb-2">
        <label for="floatingInput">Email address</label>
        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      </div>
  <!--     <div class="form-floating">
        <input name="username"  type="text" class="form-control" id="floatingInput" placeholder="user.name">
        <label for="floatingInput">Username</label>
      </div> -->
      <div class="form-floating mb-5">
        <label for="floatingPassword">Password</label>
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      </div>

      <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
      <h6 class="mt-3">Don't have an account  <a href="register.php">Create your account</a></h6>
    </form>
  </main>
<?php require "includes/footer.php"; ?>
</body>
</html>