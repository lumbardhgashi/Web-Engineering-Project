<?php 

class Product{

    private $id;
    private $photo1;
    private $photo2;
    private $photo3;
    private $sip;
    private $room;
    private $bathroom;
    private $salon;
    private $price;

    function __construct($id,$photo1,$photo2,$photo3,$sip,$room,$bathroom,$salon,$price){
        $this->id=$id;
        $this->photo1=$photo1;
        $this->photo2=$photo2;
        $this->photo3=$photo3;
        $this->sip=$sip;
        $this->room=$room;
        $this->bathroom=$bathroom;
        $this->salon=$salon;
        $this->price=$price;
    }

    function getId(){
        return $this->id;
    }
    function getPhoto1(){
        return $this->photo1;
    }
    function getPhoto2(){
        return $this->photo2;
    }
    function getPhoto3(){
        return $this->photo3;
    }
    function getSip(){
        return $this->sip;
    }
    function getRoom(){
        return $this->room;
    }
    function getBathroom(){
        return $this->bathroom;
    }
    function getSalon(){
        return $this->salon;
    }
    function getPrice(){
        return $this->price;
    }
}


?>