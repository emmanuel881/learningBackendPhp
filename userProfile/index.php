<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>
<body>
    <div class="topSec">
        <?php
        if(isset($_SESSION["userid"])){
        ?>
        <h1>Thank you,... You are logged in as <?php echo $_SESSION["useruid"] ?></h1>
        <?php
        }
        else{
        ?>
        <h1>Please login</h1>
        <?php
        }
        ?>
    </div>
    <h3>SignUp</h3>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name='uid' placeholder="username">
        <input type="password" name='pwd' placeholder="password">
        <input type="password" name='pwdrepeat' placeholder="Re-type password">
        <input type="text" name='email' placeholder="Email">
        <br>
        <button type="submit" name="submit">SignUp</button>
        <br>
    </form>
    <h3>Login</h3>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name='uid' placeholder="username">
        <input type="password" name='pwd' placeholder="password">
        <br>
        <button type="submit" name="submit">Login</button>
    </form>
    <br>
    <br>
    <a href="./includes/logout.inc.php">
    <button>LogOut</button>
    </a>
    <br>
    <br>
    <br>
    <a href="profile.php">
        <button>User Profile</button>
    </a>

</body>
</html>