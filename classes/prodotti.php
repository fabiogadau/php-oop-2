<?php /* Prodotti */

   // Trait
   trait ObjectLocation {
      // Properties
      public $lane;
      public $column;
      public $shelf;
      public $position;

      // Methods
      public function getPosition(){
         echo "<h3>Object Location</h3>
               <p><strong>Lane: </strong>$this->lane</p>
               <p><strong>Column: </strong>$this->column</p>
               <p><strong>Shelf: </strong>$this->shelf</p>
               <p><strong>Position: </strong>$this->position</p>";
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
               <p><strong>Brand: </strong>$this->brand</p>
               <p><strong>Price: </strong>$this->price €</p>
               <p><strong>Type: </strong>$this->type</p>";
      }
   }
