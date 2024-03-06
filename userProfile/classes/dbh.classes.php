<?php
// connecting into my database
class Dbh {
    protected function connect(){
        //connecting to DB
        //check if there is enough info for our DB
        try{
            $username = "root";
            $password = "manu#2*54?*";
            $dbh = new PDO('mysql:host=localhost;dbname=oopLogin', $username, $password);
            return $dbh;
        }
        catch(PDOException $e){
            print "Error!: ". $e->getMessage()."<br />";
            //we are killing the connection
            die();
        }


    }
}

?>