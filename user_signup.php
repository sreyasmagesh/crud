<?php
  include 'connect.php';
  include 'validation.php';
  include 'crud_create.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>crud_operation</title>

  <style>
    body{
      background-color:white;
    }
    .main h1{
      color:#B2C8DF;
      padding-top:5px;
    }
    .main{
      border:0px solid black;
      background-color:#2B4865;
      width:400px;
      border-radius:14px;
      box-shadow:10px 10px 20px black;
      padding-bottom:8px;
    }
    .third label{
      color:white;
    }
    .third{
      border:0px solid black;
      margin-left:0px;
      transform:translatex(47px)
    }
    .main input{
      border-radius:5px;
      padding:4px;
      border:0px solid black;
    }
    button{
      font-size:20px;
      color:black;
      border:1px solid #002B5B; 
      border-radius:10px;
      padding:5px 35px 5px 35px;
      background-color:#B2C8DF;
      
    }
    .heading{
      padding-top:14px;
    }
    span{
      color:red;
    }
  </style>

  </head>
  <body>
    
      <center>
      <form action="" method="post" enctype="multipart/form-data">
         <div class="main">
            <div class="heading">
              <h1>SIGNUP</h1>
            </div><br>
           <div class="first">
             <input size="35" name="name" type="text" placeholder="Name"><br>
             <span><?php echo $nameErr; ?></span>
           </div><br>
           <div class="second">
             <input size="35" name="mobile" type="text" placeholder="Mobile"><br>
             <span><?php echo $mobileErr;?></span>
           </div><br>
           <div class="fourth">
             <input size="35" name="email" type="email" placeholder="Email"><br>
             <span><?php echo $emailErr;?></span>
           </div><br>
           <div class="fifth">
             <input size="35" name="password" type="password" placeholder="Password"><br>
             <span><?php echo $passwordErr;?></span>
           </div><br>
           <div class="sixth">
             <input size="35" type="password" name="confirm-password" placeholder="Confirm Password"><br>
             <span><?php echo $confirmErr;?></span>
           </div><br>
           <div class="third">
             <label for="">User Image</label>
             <input size="35" type="file"  name="image">
             <span><?php echo $fileErr;?></span>
           </div><br>
           
             <button name="submit">SUBMIT</button>
           
           
          </div>
      </form>
  </center>      

   
 </body>
</html>
