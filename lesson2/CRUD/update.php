<?php

include "./connect.php";

$id = $_GET['updateId'];
$sql = "SELECT * FROM users WHERE users_id=$id";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);

$name = $row["users_name"];
$email = $row["users_email"];
$mobile = $row["users_mobile"];
$password = $row["users_pwd"];

if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    

    $sql = "UPDATE users SET users_name='$name', users_email='$email', users_mobile='$mobile', users_pwd='$password' WHERE users_id=$id";

    $result = mysqli_query($conn, $sql);

    if($result){
       header("location: ./view.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>CRUD</title>
</head>
<body>
    <div class="container">
    <form method="post" action="">
  <div class="form-group">
    <label>name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" value=<?php echo $name ?> required>
</div>
<div class="form-group">
    <label>email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" value=<?php echo $email ?> required>
</div>
<div class="form-group">
    <label>mobile number</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" value=<?php echo $mobile ?> required>
</div>
<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password" value=<?php echo $password ?> required>
</div>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>

</form>
</div>
    
</body>
</html>
