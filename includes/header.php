<?php
require_once("html.php");
$user_id = $_SESSION['user_id']??'guest';
?>

<!-- Page Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
<?php html::div(false); ?>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="http://gallery.test">
            <i class="fas fa-film mr-2"></i>
            Catalog-Z
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <?php if(isset($_SESSION['username'])): ?>
                <li class="nav-item">
                    <a
                    class="nav-link nav-link-1 active"
                    aria-current="page"
                    href="photos.php"
                    >Photos</a>
                </li>
                <li class="nav-item">
                    <a
                    class="nav-link nav-link-1 active"
                    aria-current="page"
                    href="create.php"
                    >create</a>
                </li>
                <li class="nav-item">
                    <a
                    class="nav-link nav-link-1 active"
                    aria-current="page"
                    href="logout.php"
                    >logout</a>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active"
                    aria-current="page"
                    href="register.php"
                    >register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page"
                    href="login.php"
                    >login</a>
                </li>
                <?php endif; ?>
            </ul>
        <?php html::div(false); ?>
    <?php html::div(false); ?>
</nav>