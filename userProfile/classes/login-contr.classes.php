<?php
//if i want to change something in the database

class LoginContr extends login{
    //creating class properties
    private $uid;
    private $pwd;

    //my constructor
    public function __construct($uid, $pwd){
        $this->uid = $uid;
        $this->pwd = $pwd;
    }

    //signing up the user
    // ---- first we check if user passes all the errors that might occur
    public function loginUser(){
        //carry out error handling using the methods created
        if($this->emptyInput()== false){
            //echo "empty input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        $this->getUser($this->uid, $this->pwd);
   }



    private function emptyInput(){
         //carry out error handling 
         $result;
         //check if a property is empty(user didn't fill in)
         if(empty($this->uid || $this->pwd)){
            $result = false;
         }
         else {
            $result = true;
         }
         return $result;
    }
}





?>