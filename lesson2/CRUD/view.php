<?php
include "./connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>View</title>
</head>
<body>
    <div class="container">
        <a href="./index.php">
            <button class="btn btn-primary my-5">Add User</button>
        </a>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Reg NO</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "select * from users";
    $result = mysqli_query($conn, $sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['users_id'];
            $name = $row['users_name'];
            $email = $email['users_email'];
            $mobile = $row['users_mobile'];
            $pwd = $row['users_pwd'];

            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$pwd.'</td>
            
            <td>
            <a href="update.php?updateId='.$id.'">
            <button class="btn btn-primary">Update</button>
            </a>
            <a href="delete.php?deleteId='.$id.'">
            <button class="btn btn-danger">Delete</button>
            </a>
            </td> 
            </tr>
            ';
        }
    }
    else{
        die(mysqli_error($result));
    }
    ?>
    
  </tbody>
  <a href=""></a>
</table>
       
    </div>
</body>
</html>