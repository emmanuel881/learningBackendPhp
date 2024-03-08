<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //grabbing the data
    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');
    $pwdrepeat = htmlspecialchars($_POST["pwdrepeat"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');

    //Instantiate signupController class(SignUpContr)
    // --    createing a object based of a class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    $signup = new signupContr($uid, $pwd, $pwdrepeat, $email);


    //Running error handlers and user signUp
    $signup->signupUser();

    //creating profile in the profile table
    $userId = $signup->fetchUserId($uid);
    include "../classes/profileinfo.classes.php";
    include "../classes/profileinfo-contr.classes.php";

    $profileInfo = new ProfileInfoContr($userId, $uid);
    //create the default info
    $profileInfo->defaultProfileInfo();



    //going back to front page
    header("location: ../index.php?error=none");
}
?>