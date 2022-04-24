<?php 

class User{

    private $id;
    private $name;
    private $surname;
    private $email;
    private $username;
    private $password;
    private $role;

    function __construct($id,$name,$surname,$email,$username,$password,){
        $this->id=$id;
        $this->name=$name;
        $this->surname=$surname;
        $this->email=$email;
        $this->username=$username;
        $this->password=$password;
    
    }

    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getSurname(){
        return $this->surname;
    }
    function getEmail(){
        return $this->email;
    }
    function getUsername(){
        return $this->username;
    }
    function getPassword(){
        return $this->password;
    }
    function getRole(){
        return $this->role;
    }
}


?>