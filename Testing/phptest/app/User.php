<?php 

namespace App;
class User
{

    public function __construct($userName,$userEmail){
        $this->name = $userName;
        $this->email = $userEmail;
    }
    public function name($name = null)
    {
        if($name){
            $this->name = $name;
        }
        return $this->name;
    }
    public function email($email = null)
    {
        if($email){
            $this->email = $email;
        }
        return $this->email;
    }
}

?>