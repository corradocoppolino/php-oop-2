<?php 

    class Product {

        public $nameProd;
        public $info;
        private $price;
        public $category;

        public function __construct($_nameProd, $_category,$_info){

            $this-> nameProd = $_nameProd;
            $this-> category = $_category;
            $this-> info = $_info;

        }

    }

?>