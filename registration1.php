<?php
    include("dbcon.php");
    session_start();
    if(isset($_POST['submit'])){
        extract($_POST);
    }

?>