<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <style>
        body{
            margin: 0;
            font-family: sans-serif;
            background-color:rgb(153, 235, 235) ;
        }
        h1{
            text-align: center;
            color: rgb(23, 146, 146);
        }
        .main-div{
            width: 400px;
            height: auto;
            background-color: azure;
            position: absolute;
            left: 450px;
            border-radius: 10px;
            box-shadow: 5px 5px 5px 6px rgb(23, 146, 146);

        }
        .contents{
            text-align: center;
            margin: 30px;
        }
        .elements{
            padding-top: 15px;
        }
        input[type=text],[type=email]{
            width: 80%;
            height: 25px;
        }
        button{
            width: 200px;
            height: 30px;
            border-radius: 25px;
            border: none;
            background-color: rgb(23, 146, 146);
            color: white;
        }
        input::placeholder{
            text-align: center;
        }
    </style>
</head>
<body>

<?php
include('connect.php');
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $user_id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = $_GET['id'];
    $sql = "UPDATE userlogin SET namee='$name',mobile='$mobile',email='$email',passwordd='$password' WHERE id='$user_id'";

    $result = $con->query($sql);
    if($result == TRUE){
        echo "Record updated successfully";
    }
    else{
        echo "Error found" . $sql . "<br>" . $conn->error;
    }

}


if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    $sql = "SELECT * FROM userlogin WHERE id = $user_id";
    $result = $con->query($sql);
    if($result->num_rows>0){
        while($row =$result->fetch_assoc()){
            $Name = $row['namee'];
            $Mobile = $row['mobile'];
            $Email = $row['email'];
            $password = $row['passwordd'];
            $id = $row['id'];
        }
?>

    <h1>Update Form</h1>
    <hr>
    <div class="main-div">
        <div class="contents">
            <form action="" method="post">
                <div class="elements">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                </div>
                <div class="elements">
                    <input type="text" name="name" id="" placeholder="Please type your name " value="<?php echo $Name; ?>" >
                </div>
                <div class="elements">
                    <input type="text" name="email" id="" placeholder="Please type your address" value="<?php echo $Email; ?>" >
                </div>
                <div class="elements">
                    <input type="text" name="mobile" id="" placeholder="Please type your Mobile Number" value="<?php echo $Mobile; ?>" >
                </div>
                <div class="elements">
                    <input type="email" name="password" id="" placeholder="Please type your email id" value="<?php echo $password; ?>" >
                </div>
                
                    <button type="submit" name="update">Update</button>
                </div>
            </form>
    </div>
<?php
    }else
    {
    header('Location:view.php');
    }
}
?>

</body>
</html>