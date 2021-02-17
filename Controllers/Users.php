<?php

namespace Controllers;
use Models\mvo\User;

class Users{
    
    public static function create_user($username, $email, $password){
        $user = User::create([
        	'username'=>$username,
        	'email'=>$email,
        	'password'=>$password
        ]);
        return $user;
    }
}
?>
