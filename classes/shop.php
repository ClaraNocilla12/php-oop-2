<?php


class Shop{
    use name;
    public $description;
    public $price;
    
    

    public function __construct($_name, $_description, $_price){
        $this->setName($_name);
        $this->setDescription($_description);
        $this->setPrice($_price);
   


    }

   

     public function setDescription($_description){
        $this->description=$_description;
        
    }

    public function getDescription(){
            return $this->description;
        }

     public function setPrice($_price){
        $this->price=$_price;
        
    }

    public function getPrice(){
            return $this->price;
        }

   

 

  
}


?>