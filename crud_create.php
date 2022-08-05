<?php
  include 'connect.php';
  if(isset($_POST['submit'])){
     $name=$_POST['name'];
     $email=$_POST['email'];
     $mobile=$_POST['mobile'];
     $password=$_POST['password'];

     $sql="INSERT INTO userlogin (namee , email , mobile , passwordd)
     VALUES('$name','$email','$mobile','$password')";
     $result=mysqli_query($con,$sql);
     if($result){
       echo "data inserted successfully";
     }else{
      die(mysqli_error($con));
     }
  }
?>