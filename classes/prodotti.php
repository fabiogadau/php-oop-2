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
         echo "<h2><strong>Product name: </strong>$this->name</h2>
               <h3><strong>Brand: </strong>$this->brand</h3>
               <p><strong>Price: </strong>$this->price €</p>
               <p><strong>Type: </strong>$this->type</p>";
      }
   }
