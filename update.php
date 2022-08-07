<?php
if(!$nameErr && !$emailErr && !$mobileErr && !$confirmErr ){
    if(isset($_POST['update']) ){

        $img = $_FILES['image']['name'];
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $user_id = $_POST['id'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $_GET['id'];
        $sql = "UPDATE userlogin SET images='$img' , namee='$name',mobile='$mobile',email='$email',passwordd='$password' WHERE id='$user_id'";

        $temp=$_FILES['image']['tmp_name'];
        move_uploaded_file($temp,"uploads/".$file_name);
        
        $result = $con->query($sql);
        if($result == TRUE ){
            header("Location: success.php");
        }
        else{
            echo "Error found" . $sql . "<br>" . $conn->error;
        }
      }
}


if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    $sql = "SELECT * FROM userlogin WHERE id = $user_id";
    $result = $con->query($sql);
    if($result->num_rows>0){
        while($row =$result->fetch_assoc()){
            $name = $row['namee'];
            $mobile = $row['mobile'];
            $email = $row['email'];
            $password = $row['passwordd'];
            $id = $row['id'];
        }

    }else
    {
    header('Location:user_details.php');
    }
}
?>