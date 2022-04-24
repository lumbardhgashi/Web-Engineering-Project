<?php 

class Comment{

    private $id;
    private $name;
    private $surname;
    private $email;
    private $comment;
   

    function __construct($id,$name,$surname,$email,$comment){
        $this->id=$id;
        $this->name=$name;
        $this->surname=$surname;
        $this->email=$email;
        $this->comment=$comment;
        
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
    function getComment(){
        return $this->comment;
    }
   
    
}


?>