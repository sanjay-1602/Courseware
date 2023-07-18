<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courseware</title>
    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap" rel="stylesheet">
    <!-- cutsom css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- Start NAvigation -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">CourseWare</a>
    <span class="navbar-text">Learn and Implement</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav custom-nav">
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="index.php">Home</a> 
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Courses</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Payment</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li><li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li><li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">SignUp</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Feedback</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navigation -->

<!-- Start video bg -->
<div class="container-fluid">
    <div class="vid-parent">
        <video playsinline autoplay muted loop>
            <source src="video/bgvideo.mp4"  >
        </video>
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Welcome to CourseWare</h1>
        <small class="my-content">Learn and Implement</small><br>
        <a href="#" class="btn btn-danger">Get Started</a>
    </div>
</div>
<!-- End video bg -->

<!-- start text banner -->
<div class="container-fluid bf-danger txt-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5>
                <i class="fas fa-book-open mr-3"></i> 100% online Courses
            </h5>
        </div>
        <div class="col-sm">
            <h5>
                <i class="fas fa-user mr-3"></i> Expert Instructor
            </h5>
        </div>
        <div class="col-sm">
            <h5>
                <i class="fas fa-keyboard  mr-3"></i> Lifetime Access
            </h5>
        </div>
        <div class="col-sm">
            <h5>
                <i class="fas fa-rupee-sign  mr-3"></i> Money Back Gurantee*
            </h5>
        </div>
    </div>
</div>
<!-- end text banner -->

<!-- Jquery and BootstrapJSS -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
<script src="js/all.min.js"></script>
</body>
</html>