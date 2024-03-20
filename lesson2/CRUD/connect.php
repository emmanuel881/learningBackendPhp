<?php

$conn = new mysqli("localhost", "root", "manu#2*54?*", "CRUD");

if(!$conn){
    die(mysqli_error($conn));
    exit();
}
