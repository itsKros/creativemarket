<?php 

function  pageCss(){
  $pageCss= basename($_SERVER['PHP_SELF']); 
  $pageCss= str_replace("php","css",$pageCss);
  if($pageCss=="index.css"){
    $pageCss = str_replace("index","home",$pageCss); 
  }
  return $pageCss;
}



?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative Market</title>

    <!-- Bootstrap core CSS -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link href="assets/css/fancySelect.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    
  </head>

  <body>

 <!--Mobile Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light static-top desktop">
  <div class="container-fluid">
    
    
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Stories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>

    <div class="collapse navbar-collapse">
      <a class="navbar-brand" href="#"><img src="assets/imgs/cm-logo-mc.png" class="img-fluid" alt=""></a>
    </div>
    
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">List Gear</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Rent Gear</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FAQ's</a>
        </li>
        <div class="nav-item">
              <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="index.html" class="btn btn-unique btn-ssq white">Login</a>
                </li>
                <li class="list-inline-item">
                    <a href="index.html" class="btn btn-unique btn-ssq">Sign up</a>
                </li>
              </ul>
        </div>
      </ul>
    </div>
  </div>
</nav>


 <!--Mobile Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light static-top mobile">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="assets/imgs/cm-logo-mc.png" class="img-fluid" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Stories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">List Gear</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Rent Gear</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FAQ's</a>
        </li>
        <div class="nav-item">
              <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="index.html" class="btn btn-unique btn-ssq white">Login</a>
                </li>
                <li class="list-inline-item">
                    <a href="index.html" class="btn btn-unique btn-ssq">Sign up</a>
                </li>
              </ul>
        </div>
      </ul>
    </div>
  </div>
</nav>

