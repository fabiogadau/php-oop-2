<?php /* Database Prodotti */

      // Includes Products
      @include_once __DIR__ . '/classes/informatica.php';
      @include_once __DIR__ . '/classes/elettrodomestici.php';

      // Instances
      $product1 = new ComputerTech('22fw', 'hp', 128, 'PC Monitor', 'hdmi');
      $product2 = new Household('BWE81284X', 'indesit', 630, 'Washing machine', 'A++');