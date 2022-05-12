<?php



    class Food extends Shop{

        public $weight;

        public function __construct($_name, $_description, $_price, $_weight){
            parent:: __construct($_name, $_description, $_price);
            $this->setWeight($_weight);
        }


        public function setWeight($_weight){
        $this->weight=$_weight;
        
    }

        public function getWeight(){
            return $this->weight;
        }

    }

?>