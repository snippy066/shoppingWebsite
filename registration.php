
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="files/boot.css">
    <!-- Custom CSS -->
    <!--background-image:linear-gradient(#CCFFCC,#9AFF9A)-->
    <link rel="stylesheet" href="css/style.css">

    <title>Online Booking</title>
    <style>
        .container-fluid {
        margin:0px;padding:0px;
        }
        body 
        {
        overflow-x:hidden;
        background-image:linear-gradient(#F0FFF0,#FFFAFA);
        background-repeat:no-repeat;
        }
        div{
            background-image:linear-gradient(#F0FFF0,#70DB93);
            background-repeat:no-repeat;
        }
        html{
            height: 100%;
        }
    </style>
</head>
<?php
include("dbcon.php");
session_start();

if(isset($_POST['sumit'])){
    
}

?>
    <body>
        <div class="container-fluid">

            <div class="row" style="background-image:linear-gradient(#CCFFCC,#9AFF9A);">
                <div class="col-log-1 col-md-1 col-sm-1 mt-1">
                    <a href="login.php" class="btn btn-primary">LOGIN</a>
                </div>
                <div class="col-log-10 col-md-10 col-sm-10">
                    <h2 class="text-center text-decoration-underline">Sign Up</h2>
                </div>
                <div class="col-log-1 col-md-1 col-sm-1 mt-1">
                    <a href="index.php" class="btn btn-warning">Back</a>
                </div>
            </div>
                <div style="width:100%; height:70px; background-image:linear-gradient(#F0FFF0,#FFFAFA);
        background-repeat:no-repeat;"></div>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                <img src="" alt="here goes images" class="img img-fluid">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <form action="registration1.php" class="p-2 border border-danger shadow" method="post" enctype="multipart/form-data"  >
                    <table class="table table-borderless" >
                        
                        <label style="font-weight:bold;margin-left:5px">Select an Id type :</label>
                        <select class="form-select" aria-label="Default select example" style="width:61% ; float:right ; margin-right:10px;">
                        <option selected class="fade-shadow">--Select a option below--</option>
                        <option value="1">Adhar Card No.</option>
                        <option value="2">Pan Card No.</option>
                        <option value="3">Voter ID</option>
                        </select>
                        <tr><th>Enter Identity :</th><td><input type="text" name="name" value="" class="form-control"></td></tr>
                        <tr><th>Name :</th><td><input type="text" name="name" value="" class="form-control"></td></tr>
                        <tr><th>Mobile NO. :</th><td><input type="text" name="name" value="" class="form-control"></td></tr>
                        <tr><th>DOB :</th><td><input type="text" name="name" value="" class="form-control"></td></tr>
                        <label style="font-weight:bold;margin-left:5px;" class="mt-3">Select Geneder :</label>
                        <select class="form-select" aria-label="Default select example" style="width:61% ; float:right ; margin-right:10px; margin-top:-20px">
                        <option selected class="fade-shadow">--Select a option below--</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="3">Don't prefer to say</option>
                        </select>
                        <tr><th>Address :</th><td><input type="text" name="name" value="" class="form-control"></td></tr>
                        <tr><th>Pin Code :</th><td><input type="text" name="name" value="" class="form-control"></td></tr>
                        <tr><td colspan="2" class="text-center"><button type="submit" name="submit" class="btn btn-outline-success btn-sm">SUBMIT</button></td></tr>
                    </table>
                   </form>
                </div>
            </div>

        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="files/boot.js"></script> 
        <script src="files/boot1.js"></script>
        <script src="files/boot2.js"></script>
        <script src="files/boot3.js"></script>
        

        <!--footer-->
        <footer class="text-center text-dark" style="background-image:linear-gradient(#F0FFF0,#FFFAFA)">
 

  <!-- Copyright -->
  <div class="text-center p-3" style="background-image:linear-gradient(#F0FFF0,#FFFAFA)">
    © 2020 Copyright:
    <a class="text-dark" href="">Snippy</a>
  </div>
  <!-- Copyright -->
</footer>
        <!--end-->
    </body>

</html>