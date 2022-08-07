<?php
  include 'crud_read.php';
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
    <style>
      img{
        width:20%;
        border-radius:50%;
      }
    </style>

<table class="table">
<thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">User image</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">mobile</th>
        <th scope="col">password</th>
    </tr>
</thead>
<tbody> 

<?php

while ($row = $result->fetch_assoc()) {
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo "<img src = 'uploads/".$row['images']."'>"; ?></td>
        <td><?php echo $row['namee']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
        <td><?php echo $row['passwordd']; ?></td>
        
        <td>
            <form action="" method="post" >
               <input type="hidden" name="id" value="<?=$row['id'] ?>">
               <button class="Btn btn-action bg-primary" name="delete" >Delete</button>
            </form>
        </td>
        <td>
            <form action="" method="get" >
               <input type="hidden" name="id" value="<?=$row['id'] ?>">
               <button class="Btn btn-action bg-danger" name="update"  ><a href="updation_form.php?id=<?php echo $row['id']; ?>"> Update</a></button>
            </form>
        </td>
    </tr>                       

<?php       

}

?>                
</tbody>

</body>
</html>
