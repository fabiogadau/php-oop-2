<?php /*
         PHP e OOP 2: Ereditarietà
         Creare e modellizzare classi per gestire i prodotti di un magazzino
         Creare una classe generale e poi creare altre classi che estendono questa classe generale
         Eseguire degli output istanziando gli oggetti delle varie classi
      */

      // Includes Products
      @include_once __DIR__ . '/classes/informatica.php';
      @include_once __DIR__ . '/classes/elettrodomestici.php';

      // Instances
      $prodotto1 = new ComputerTech('22fw', 'hp', 128, 'PC Monitor');
      echo $prodotto1->printDetails();

      $prodotto2 = new Household('BWE81284X', 'indesit', 630, 'Washing machine');
      echo $prodotto2->printDetails(); 