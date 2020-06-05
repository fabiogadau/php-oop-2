<?php /*
         PHP e OOP 2: Ereditarietà
         Creare e modellizzare classi per gestire i prodotti di un magazzino
         Creare una classe generale e poi creare altre classi che estendono questa classe generale
         Eseguire degli output istanziando gli oggetti delle varie classi
      */

   // Includes Products Database
   @include_once __DIR__ . '/database-prodotti.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP OOP 2</title>
</head>
<body>

   <header>
      <h1>Warehouse</h1>
   </header>

   <main>
      <div class="prodotto">
         <?php echo $product1->printDetails(); ?>
         <p><strong>Connectivity: </strong><?php echo $product1->connectivity ?></p>
      </div>
      
      <div class="prodotto">
         <?php echo $product1->printDetails(); ?>
         <p>Energy rating: <?php echo $product2->energy_rating ?></p>
      </div>
   </main>

</body>
</html>