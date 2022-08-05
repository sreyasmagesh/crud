<?php
include 'connect.php';

if (isset($_POST['delete'])){
    $id = $_POST['id'];
    $delete_q = "DELETE FROM userlogin WHERE id = $id";
    $result = $con->query($delete_q);
    header("Location: user_details.php");
}
?>