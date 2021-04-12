<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="files/boot.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="files/font.css">
    <script src="https://use.fontawesome.com/b80ad5dc68.js"></script>

    <title>Online Booking</title>
    <style>
        .container-fluid {
        margin:0px;padding:0px;
        }
        body 
        {
        overflow-x:hidden;
        }
        .carousel-caption {
          position: relative;
          border: 0px solid black;
          top: 0;
          left: 0;
          color: black;
          text-align: center;
          padding: 0px;
        }

    </style>
</head>

    <body>
        <div class="container-fluid">

        <!-- nav bar starting-->
        <nav class="navbar navbar-expand-lg navbar-ligh sticky-top " style="background-color:	#FFB6C1;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Online Booking</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">price</a>
        </li>
        
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Country
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">India</a>
          <a class="dropdown-item" href="#">USA</a>
          <a class="dropdown-item" href="#">Other</a>
        </div>
      </li>
       
      </ul>
      <form class="d-flex justify-content-between" >
        <input class="form-control me-2" type="search" placeholder="Search items...." aria-label="Search" style="width:450px;margin-left:10px;">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul class="navbar-nav">
    <li class="nav-item" style="margin-right:5px;margin-left:60px">
        <a class="nav-link btn btn-outline-primary" data-toggle="modal" data-target="#registration" >SIGN IN</a>
      </li>
    <li class="nav-item" style="margin-right:10px">
        <a class="nav-link btn btn-outline-danger" href="login.php">LOGIN</a>
      </li>
      </ul>
    </div>
  </div>
</nav>
        <!--nav bar ending-->

<!--modal starting -->

<div class="modal fade" id="registration" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" Style="color:green">Sign Up</h5>
        <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
        <i class="fa fa-times" aria-hidden="true" Style="color :red"></i>
        </button>
      </div>
        <!--coursel for registration-->
        <div id="carouselExs" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExs" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExs" data-slide-to="1"></li>
    <li data-target="#carouselExs" data-slide-to="2"></li>
    <li data-target="#carouselExs" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/car.jpg" class="d-block w-100" alt="..." style="height:200px">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/ussama-azam-5IcEBmSOQq0-unsplash.jpg" class="d-block w-100" alt="..." style="height:200px">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/pic.png" class="d-block w-100" alt="..." style="height:200px">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/photo.jpg" class="d-block w-100" alt="..." style="height:200px">
      <div class="carousel-caption ">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExs" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExs" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        <!--coursel end-->
      <div class="modal-body">
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@gmail.com">
        </div>
        <div class="mb-3">
        <label for="inputPassword" class="col-form-label">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="password">
        </div>
        
        <h6 Style="text-align:center">Already Have an Account? <a href="login.php">LOGIN</a></h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <a type="button" class="btn btn-primary" href="registration.php" name="submit">Submit</a>
      </div>
    </div>
  </div>
</div>
<!--modal ending-->
<!-- validating email -->
<?php 
 include("dbcon.php");
 session_start();
 

?>

        <!--navs starting-->
        <ul class="nav nav-pills">
    
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Select Cateogry
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Cars</a>
          <a class="dropdown-item" href="#">Men Wear</a>
          <a class="dropdown-item" href="#">Women Wear</a>
        </div>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="#" style="color:black">Item1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" style="color:black">Item2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" style="color:black">Item3</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" style="color:black">Item4</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" style="color:black">Item5</a>
    </li>
  </ul>

        <!--navs close-->
 

<!--coursal starting-->

<div class="row">

<!--coursal first part-->
<div class="col-lg-6 col-md-6 col-sm-12">

<div id="carouselExs" class="carousel slide mt-2" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExs" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExs" data-slide-to="1"></li>
    <li data-target="#carouselExs" data-slide-to="2"></li>
    <li data-target="#carouselExs" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/car.jpg" class="d-block w-100" alt="..." style="height:400px">
    </div>
    <div class="carousel-item">
      <img src="image/jose-martinez-Q76SMw8HVYk-unsplash.jpg" class="d-block w-100" alt="..." style="height:400px">
    </div>
    <div class="carousel-item">
      <img src="image/pic.png" class="d-block w-100" alt="..." style="height:400px">
    </div>
    <div class="carousel-item">
      <img src="image/photo.jpg" class="d-block w-100" alt="..." style="height:400px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExs" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExs" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!--end-->

<!--coursal second part-->
<div class="col-lg-6 col-md-6 col-sm-12">
<div id="carouselEx" class="carousel slide mt-2" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselEx" data-slide-to="0" class="active"></li>
    <li data-target="#carouselEx" data-slide-to="1"></li>
    <li data-target="#carouselEx" data-slide-to="2"></li>
    <li data-target="#carouselEx" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/nimble-made-hMMXhKSZk7k-unsplash.jpg" class="d-block w-100" alt="..." style="height:400px">
    </div>
    <div class="carousel-item">
      <img src="image/rodolfo-marques-0j-y7NTkyKM-unsplash.jpg" class="d-block w-100" alt="..." style="height:400px">
    </div>
    <div class="carousel-item">
      <img src="image/ussama-azam-5IcEBmSOQq0-unsplash.jpg" class="d-block w-100" alt="..." style="height:400px">
    </div>
    <div class="carousel-item">
      <img src="image/jose-martinez-Q76SMw8HVYk-unsplash.jpg" class="d-block w-100" alt="..." style="height:400px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselEx" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselEx" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
<!--end-->

</div>

<!--coursal ending-->


<!--card for Recommendation started from here-->

<div class="row">
<div  class="col-lg-12 col-md-12 col-sm-12">
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Recommendation<i class="fa fa-gratipay" aria-hidden="true" style="color:red"></i></span>
  </div>
</nav>
</div>
<div class="card-group">
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

</div>
<!--card Recommendation end-->

  </div>


<!--card for fresh Recomendation-->

<div class="row">
<div  class="col-lg-12 col-md-12 col-sm-12">
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Cateogries<i class="fa fa-shopping-cart" aria-hidden="true" style="color:blue"></i>
</span>
  </div>
</nav>
</div>
<div class="card-group">
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

</div>

<!--second-->
<div class="row">
<div class="card-group">
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

</div>

<!--third-->
<div class="row">

<div class="card-group">
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

</div>
<!--card end -->



<!--Footer Starts here-->
<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-facebook-square" aria-hidden="true"></i>
      </a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-twitter-square" aria-hidden="true"></i></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-google" aria-hidden="true"></i>
      </a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-instagram" aria-hidden="true"></i>
      </a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-linkedin-square" aria-hidden="true"></i>
      </a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fa fa-github-alt" aria-hidden="true"></i>
      </a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="">Snippy</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

<!--Footer end-->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="files/jq.js"></script>
        <script src="files/boot.js"></script>
        <script src="files/boot2.js"></script>
        <script src="files/boot3.js"></script>
        
    </body>
</html>