<?php 

    class User{

        public $name;
        public $surname;
        public $dateOfBirth;
        public $address;
        public $age;
        public $gender;
        public $premium;
        public $cart;

        public function __construct($_name, $_surname, $_age, $_premium){

            $this -> name = $_name;
            $this -> surname = $_surname;
            $this -> age = $_age;
            $this -> premium = $_premium;
    
        }

        public function isPremium(){

            if(!$this->premium){

                return "Non sei un utente premium";

            }else{

                return "Sei un utente premium";

            }

        }

    }

?>