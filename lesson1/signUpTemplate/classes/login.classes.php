<?php
//deal with all the database stuff
// will extend to the db class so as to use the properties of that class
class Login extends Dbh{
    protected function getUser($uid, $pwd){
        //select from database the username keyed in
        $stmt = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_uid = ? OR users_email = ?;');     

        if(!$stmt->execute(array($uid, $pwd))){
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }
        
        //check if we have 0 result from the database
        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../index.php?error=userNotFound");
            exit();
        }
        //lets check if the passwords match
        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //return true if they are the same
        $checkPwd = password_verify($pwd, $pwdHashed[0]["users_pwd"]);

        if($checkPwd == false){
            $stmt = null;
            header("location: ../index.php?error=wrongPassWord");
            exit();
        }
        elseif($checkPwd == true){
            //lets create a new prepare statement
            //---- will check everything from users where usersname ==  what was typed
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE users_uid = ? OR users_email = ? AND users_pwd = ?;');

            if(!$stmt->execute(array($uid, $uid, $pwd))){
                $stmt = null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            if($stmt->rowCount() == 0){
                $stmt = null;
                header("location: ../index.php?error=userNotFound");
                exit();
            }
            
            //lets login the user
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["useruid"] = $user[0]["users_uid"];

            $stmt = null;
        }


        $stmt = null;

    }
}





?>