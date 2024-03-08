<?php

class ProfileInfoContr extends ProfileInfo {

    private $userId;
    private $userUid;

    public function __construct($userId, $userUid){
        $this->userId = $userId;
        $this->userUid = $userUid;
    }

    //default profile info

    public function defaultProfileInfo(){
        $profileAbout = "say sommething about your-self";
        $profileTitle = "Hi!! I am ".$this->userUid;
        $profileText = "Welcome to my profile!! i will let you know about myself";

        //lets add default information
        $this->setProfileInfo($profileAbout, $profileTitle, $profileText, $this->userId);
    }

    public function updateProfileInfo($about, $introTitle,$introText){
        //error handlers
        if($this->emptyInputCheck($about, $introTitle,$introText) == true){
            header('location: ../profilesettings.php?error=emptyField');
            exit();
        }

        //update information
        $this->setNewProfileInfo($about, $introTitle, $introText, $this->userId);


    }
    //lets check if user did fill in or left it empty
    public function emptyInputCheck($about, $introTitle,$introText){
        $result;

        if(empty($about) || empty($introTitle) || empty($introText))
        {
            $result = true;
        }
        else{
            $result = false;
        }

        return $result;

    }
}