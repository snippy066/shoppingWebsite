<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="..//files/boot.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="..//files/font.css">
    <script src="https://use.fontawesome.com/b80ad5dc68.js"></script>

    <title>Admin Panel</title>
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
      
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="..//files/jq.js"></script>
        <script src="..//files/boot.js"></script>
        <script src="..//files/boot2.js"></script>
        <script src="..//files/boot3.js"></script>
        
    </body>
</html>