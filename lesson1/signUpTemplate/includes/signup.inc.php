<?php
if(isset($_POST["submit"])){
    //grabbing the data

    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];


    //Instantiate signupController class(SignUpContr)
    // --    createing a object based of a class
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";

    $signup = new signupContr($uid, $pwd, $pwdrepeat, $email);


    //Running error handlers and user signUp
    $signup->signupUser();


    //going back to front page
    header("location: ../index.php?error=none");
}
?>