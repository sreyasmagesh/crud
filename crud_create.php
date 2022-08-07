<?php

  if(isset($_POST['submit'])){

  if(!$nameErr && !$emailErr && !$passwordErr && !$mobileErr && !$confirmErr ){
    $file_name=$_FILES['image']['name'];
    $temp=$_FILES['image']['tmp_name'];
    move_uploaded_file($temp,"uploads/".$file_name);

    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="INSERT INTO userlogin (namee , email , mobile , passwordd , images)
    VALUES('$name','$email','$mobile','$password','$file_name')";
    $result=mysqli_query($con,$sql);
    if($result){
      header("Location: success.php");
      move_uploaded_file($_FILES['image']['temp_name'],"upload_images/$img");
    }else{
     die(mysqli_error($con));
    }
  }
     
}
?>
