<?php /* Prodotti */

   class Product {
      // Properties
      public $name;
      public $brand;
      public $price;
      public $type;

      // Construct
      public function __construct($_name, $_brand, $_price, $_type){
         $this->name = $_name;
         $this->brand = $_brand;
         $this->price = $_price;
         $this->type = $_type;
      }

      // Methods
      public function printDetails(){
         echo "<h2>$this->name</h2>
               <h3>$this->brand</h3>
               <p>$this->price €</p>
               <p>$this->type</p>";
      }
   }
