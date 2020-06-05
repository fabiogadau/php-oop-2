<?php /* Informatica */

   // Includes parent class
   @include_once __DIR__ . '/prodotti.php';

   class ComputerTech extends Product {
      // Properties
      public $connectivity;

      // Construct
      public function __construct($_name, $_brand, $_price, $_type, $_connectivity){
         parent::__construct($_name, $_brand, $_price, $_type);
         $this->connectivity = $_connectivity;
      }
   }