<?php /* Database Prodotti */

      // Includes Products
      @include_once __DIR__ . '/classes/informatica.php';
      @include_once __DIR__ . '/classes/elettrodomestici.php';

      // Instances
      $product1 = new ComputerTech('22fw', 'A172B', 'hp', number_format(128, 2), 'PC Monitor', 1, 13, 5, 4, '1 hdmi');
      $product2 = new ComputerTech('VivoBook S512DA', 'B178B', 'Asus', number_format(624.30, 2), 'Notebook', 5, 16, 8, 1, '1 hdmi, 3 usb 2.0, 2 usb 3.0, wi-fi, ethernet');
      $product3 = new ComputerTech('Logi K128IT', 'C812H', 'logitech', number_format(36.40, 2), 'PC Keyboard', 3, 11, 5, 6, 'bluetooth');
      $product4 = new ComputerTech('Canvio HDT1U3', 'D015G', 'Toshiba', number_format(56.80, 2), 'External Hard Disk 1TB', 4, 15, 9, 2, '1 hdmi');
      
      $product5 = new Household('BWE81284X', 'Q450S', 'indesit', number_format(630, 2), 'Washing machine', 10, 4, 2, 1, 'A++');
      $product6 = new Household('hotpoint Y14MNB', 'P040G', 'Ariston', number_format(960.90, 2), 'Fridge', 12, 3, 4, 8, 'A+++');
      $product7 = new Household('MWF427SL', 'S420D', 'Whirlpool', number_format(173, 2), 'Electric oven', 11, 4, 6, 6, 'A+');
      $product8 = new Household('S4SM1E', 'P569K', 'Bosch', number_format(351.99, 2), 'Dishwasher', 10, 8, 12, 2, 'B');