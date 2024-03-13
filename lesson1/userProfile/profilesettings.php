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
    <title>Settings</title>
</head>
<body>
    <h3>Profile settings</h3>
    <br>
    <form action="./includes/profileinfo.inc.php" method="post">
        <textarea name="about" id="" cols="30" rows="10" placeholder="Profile about section."><?php $profileInfo->fetchAbout($_SESSION["userid"]);?> </textarea>
        <br>
        <br>
        <p>change your profile page intro here</p>
        <br>
        <input type="text" name="introtitle" placeholder="profile title" value="<?php $profileInfo->fetchTitle($_SESSION["userid"]); ?>">
        <br>
        <br>
        <textarea name="introtext" id="" cols="30" rows="10" placeholder="profile introduction"><?php $profileInfo->fetchText($_SESSION["userid"]); ?></textarea>
        <br>
        <br>
        <button type ="submit" name="submit">Save</button>
    </form>
</body>
</html>