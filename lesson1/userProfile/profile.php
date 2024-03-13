<?php
    session_start();

    include "./classes/dbh.classes.php";
    include "./classes/profileinfo.classes.php";
    
    include "./classes/profileinfo-view.classes.php";

    $profileInfo = new ProfileInfoView();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>
<body>
    <h2>Title</h2>
    <p>
        <?php
            $profileInfo->fetchTitle($_SESSION["userid"]);
         ?>
    </p>
    <p>
    <?php
            $profileInfo->fetchText($_SESSION["userid"]);
         ?>
    </p>

    <h3>About</h3>
    <p>
        <?php
            $profileInfo->fetchAbout($_SESSION["userid"]);
         ?>
    </p>
    <a href="./profilesettings.php">
        <button>change profile details</button>
    </a>
    <br>
    <br>
    <a href="index.php">
        <button>Back</button>
    </a>

</body>
</html>