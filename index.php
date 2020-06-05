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

   <div class="prodotto">
      <h2>Product Name: <?php echo $prodotto1->name ?></h2>
      <h3>Product Brand: <?php echo $prodotto1->brand ?></h3>
      <p>Product Price: <?php echo $prodotto1->price ?></p>
      <p>Product Type: <?php echo $prodotto1->type ?> €</p>
   </div>
</body>
</html>