<?php /* Elettrodomestici */

   // Includes parent class
   @include_once __DIR__ . '/prodotti.php';

   class Household extends Product {
      // Properties
      public $energy_rating;

      // Construct
      public function __construct($_name, $_brand, $_price, $_type, $_energy_rating){
         parent::__construct($_name, $_brand, $_price, $_type);
         $this->energy_rating = $_energy_rating;
      }
   }