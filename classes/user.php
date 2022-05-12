<?php



class User{
    use name; 
    public $card;
    public $registration;
    
    public $cardExpMonth;
    public $cardExpYear;
    public $discount=0;
    
    


    public function __construct($_name,$_card,$_registration){//$_cardExpMonth,$_cardExpYear){
            $this->setName($_name);
            $this->setCard($_card);
            $this->setRegistration($_registration);
            // $this->setCard($_cardExpMonth);
            // $this->setCard($_cardExpYear);
            
           
            
            
    }


    public function setCard($_card){
             $this->card=$_card;
             
            return $this;
        
    }

     public function getCard(){
            return $this->card;
        }


    public function setRegistration($_registration){
             $this->registration=$_registration;
             return $this;
    }

     public function getRegistration(){
            return $this->registration;
        }


    // public function setCardExpMonth($_cardExpMonth){
    //          $this->cardExpMonth=$_cardExpMonth;
    //          return $this;
    // }

    //  public function getCardExpMonth(){
    //         return $this->cardExpMonth;
    // }
    //     public function setCardExpYear($_cardExpYear){
    //          $this->cardExpYear=$_cardExpYear;
    //          return $this;
    // }

    //  public function getCardExpYear(){
    //         return $this->cardExpYear;
    //     }

        //SCONTO
     public function setDiscount($a){
         if($a==true){
             $this->discount=0.2;
         }

     }   


     public function getDiscount(){
         return $this->discount;
        
    
     }


     public function setExp($_CardExpMonth,$_CardExpYear){
         $this->$cardExpMonth=$_CardExpMonth;
         $this->$cardExpYear=$_CardExpYear;
         $todayData=strtotime('now');
         //set data europea
         $cardExp='1' . '-' . $_CardExpMonth . '-' . $_CardExpYear;
         $cardExpData=strtotime($cardExp);

         

         if($todayData>$cardExpData){
             
             echo 'carta scaduta';

         }else{
             echo 'continua con gli acquisti';
         }

     }





}


?>