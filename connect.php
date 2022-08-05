<?php
$con = new mysqli("localhost","sreyas","Sre12345","user");
if(!$con){
     die(mysqli_error($con));
}
else
{     echo "success";
}
?>