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
        public $discount;

        public function __construct($_name, $_surname, $_age, $_premium){

            $this -> name = $_name;
            $this -> surname = $_surname;
            $this -> age = $_age;
            $this -> premium = $_premium;

        }

        public function isPremium(){

            if(!$this->premium){

                $this -> discount = 1;
                return "Non sei un utente premium, quindi non hai diritto allo sconto speciale";

            }else{

                $this -> discount = 0.80;
                return "Sei un utente premium, quindi hai diritto al 20% di sconto sul totale finale";

            }

        }

        public function isPremiumDiscount(){

            if(!$this->premium){

                return $this -> discount = 1;

            }else{

                return $this -> discount = 0.80;

            }

        }

        

    }

?>