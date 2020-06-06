<?php /* Prodotti */

   // Trait
   trait ObjectLocation {
      // Properties
      public $lane;
      public $column;
      public $shelf;
      public $position;

      // Methods
      public function getLocation(){
         echo "<h3>Object Location</h3>
               <ul>
                  <li><strong>Lane: </strong>$this->lane</li>
                  <li><strong>Column: </strong>$this->column</li>
                  <li><strong>Shelf: </strong>$this->shelf</li>
                  <li><strong>Position: </strong>$this->position</li>
               </ul>";
      }
   }

   class Product {
      // Trait
      use ObjectLocation;

      // Properties
      public $name;
      public $id_code;
      public $brand;
      public $price;
      public $type;

      // Construct
      public function __construct($_name, $_id_code, $_brand, $_price, $_type, $_lane, $_column, $_shelf, $_position){
         $this->name = $_name;
         $this->id_code = $_id_code;
         $this->brand = $_brand;
         $this->price = $_price;
         $this->type = $_type;
         $this->lane = $_lane;
         $this->column = $_column;
         $this->shelf = $_shelf;
         $this->position = $_position;
      }

      // Methods
      public function printDetails(){
         echo "<h2><strong>Product name: </strong>$this->name</h2>
               <h3><strong>ID Code: </strong>$this->id_code</h3>
               <ul>
                  <li><strong>Brand: </strong>$this->brand</li>
                  <li><strong>Price: </strong>$this->price €</li>
                  <li><strong>Type: </strong>$this->type</li>";
      }
   }
