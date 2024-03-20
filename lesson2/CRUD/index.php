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
    <form method="post" action="./crud.php">
  <div class="form-group">
    <label>name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
</div>
<div class="form-group">
    <label>email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" required>
</div>
<div class="form-group">
    <label>mobile number</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" required>
</div>
<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password" required>
</div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>
</div>
    
</body>
</html>