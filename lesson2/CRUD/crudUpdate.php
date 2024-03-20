<?php

include "./connect.php";

if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];

    $sql = "insert into users(users_name, users_email, users_mobile, users_pwd) 
    values('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($conn, $sql);

    if($result){
       header("location: ./view.php");
    }
}
?>