<?php

trait name{
    public $name;

     public function setName($_name){
        $this->name=$_name;
        return $this;
    }

    public function getName(){
            return $this->name;
        }


}




?>