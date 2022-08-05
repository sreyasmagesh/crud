<?php
  include 'validation.php';
  include 'crud_create.php';
  include 'crud_delete.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>crud_operation</title>
  </head>
  <body>
  <form method="post">
        <div class="form-group" m-5>
          <label for="exampleInputEmail1">Name</label>
          <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
          <span>* <?php echo $nameErr;?></span>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <span>* <?php echo $emailErr;?></span>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Mobile</label>
          <input name="mobile" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter mobile">
          <span>* <?php echo $mobileErr;?></span>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          <span>* <?php echo $passwordErr;?></span>
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </form>

  
   
 </body>
</html>
