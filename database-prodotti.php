<?php /* Database Prodotti */

      // Includes Products
      @include_once __DIR__ . '/classes/informatica.php';
      @include_once __DIR__ . '/classes/elettrodomestici.php';

      // Instances
      $product1 = new ComputerTech('22fw', 'A172B', 'hp', 128, 'PC Monitor', 1, 13, 5, 4, 'hdmi');
      $product2 = new Household('BWE81284X', 'C450S', 'indesit', 630, 'A++', 10, 4, 2, 1, 'Washing machine');