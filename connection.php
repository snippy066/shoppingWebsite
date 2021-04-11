<?php
include("dbcon.php");
$sql="select * from sign";
$x=mysqli_query($con,$sql);
if($r=mysqli_fetch_assoc($x)){
    echo $r['name'];
}
else{
    echo "sorry";
}
?>