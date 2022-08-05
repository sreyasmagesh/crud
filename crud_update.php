<?php
if (isset($_GET['id'])){
    $id = $_GET['id'];

    $query_update = "SELECT * FROM userlogin WHERE id = $id"
    $get_ = $mysql->query($query_update);
    if (count($row = $get_->fetch_array()) > 0){
        $name = $row['name']
        $email = $row['email']
        $mobile = $row['mobile']
        $password = $row['password']
    }
}
?>