<?php /* Elettrodomestici */

   // Includes parent class
   @include_once __DIR__ . '/prodotti.php';

   class Household extends Product {
      // Properties
      public $energy_rating;

      // Construct
      public function __construct($_name, $_id_code, $_brand, $_price, $_type, $_lane, $_column, $_shelf, $_position, $_energy_rating){
         parent::__construct($_name, $_id_code, $_brand, $_price, $_type, $_lane, $_column, $_shelf, $_position);
         $this->energy_rating = $_energy_rating;
      }

      // Partial Override
      public function printDetails(){
            return parent::printDetails() . "  <li><strong>Energy rating: </strong> $this->energy_rating </li>
         </ul>";
      }
   }