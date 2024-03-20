
<?php
include './connect.php';

if(isset($_GET['deleteId'])){
    $id = $_GET['deleteId'];

    $sql = "delete from users where users_id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("location: ./view.php");

    }
}
?>