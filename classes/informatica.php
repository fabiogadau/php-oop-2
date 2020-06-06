<?php /* Informatica */

   // Includes parent class
   @include_once __DIR__ . '/prodotti.php';

   class ComputerTech extends Product {
      // Properties
      public $connectivity;

      // Construct
      public function __construct($_name, $_id_code, $_brand, $_price, $_type, $_lane, $_column, $_shelf, $_position, $_connectivity){
         parent::__construct($_name, $_id_code, $_brand, $_price, $_type, $_lane, $_column, $_shelf, $_position);
         $this->connectivity = $_connectivity;
      }

      // Partial Override
      public function printDetails(){
            return parent::printDetails() . "  <li><strong>Connectivity: </strong> $this->connectivity </li>
         </ul>";
      }
   }