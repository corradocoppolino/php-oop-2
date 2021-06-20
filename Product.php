<?php 

    class Product {

        public $nameProd;
        public $info;
        public $price;
        public $category;

        public function __construct($_nameProd, $_category,$_info,$_price){

            $this-> nameProd = $_nameProd;
            $this-> category = $_category;
            $this-> info = $_info;
            $this-> price = $_price;

        }

    }

?>