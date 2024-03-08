<?php

class ProfileInfo extends Dbh {
    //we get the profile infomation
    protected function getProfileInfo($userId){
        $stmt = this->connect()->prepare('SELECT * FROM profiles WHERE users_id = ?;');

        if(!$stmt->execute(array($userId))){
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }

        if($stmt->rowCount() == 0){
            $stmt = null;
            header('location: ../index.php?error=profilenotfound');
            exit();
        }

        //fetch data as an associative array
        $profileData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $profileData;
    }

    //we update the profile information
    protected function setNewProfileInfo($profileAbout, $profileTitle, $profileText, $userId){
        $stmt = this->connect()->prepare('UPDATE profiles SET profiles_about = ?, profiles_introtitle = ?, profiles_introtext = ? WHERE users_id = ?;');

        if(!$stmt->execute(array($profileAbout, $profileTitle, $profileText, $userId))){
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }

        $stmt = null;
    }

    //lets set default profile info for the user

    protected function setProfileInfo($profileAbout, $profileTitle, $profileText, $userId){
        $stmt = this->connect()->prepare('INSERT INTO profiles (profiles_about, profiles_introtitle, profiles_introtext, users_id) VALUES (?, ?, ?, ?)');

        if(!$stmt->execute(array($profileAbout, $profileTitle, $profileText, $userId))){
            $stmt = null;
            header('location: ../index.php?error=stmtfailed');
            exit();
        }

        $stmt = null;
    }



    
}