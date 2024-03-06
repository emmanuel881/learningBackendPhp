<?php
if(isset($_POST["submit"])){
    //grabbing the data
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

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