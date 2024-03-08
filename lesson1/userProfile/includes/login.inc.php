<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //grabbing the data
    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, 'UTF-8');

    //Instantiate signupController class(SignUpContr)
    // --    createing a object based of a class
    include "../classes/dbh.classes.php";
    include "../classes/login.classes.php";
    include "../classes/login-contr.classes.php";

    
    $login = new LoginContr($uid, $pwd);
    


    //Running error handlers and user signUp
    $login->loginUser();


    //going back to front page
    header("location: ../index.php?error=none");
}
?>