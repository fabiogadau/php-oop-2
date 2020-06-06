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
   <!-- Stylesheet -->
   <link  rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mukta:wght@400;600&display=swap">
   <link rel="stylesheet" href="assets/styles/main.css">
</head>
<body>

   <div id="app">
      <header>
         <h1>Warehouse</h1>
      </header>

      <main id="products">
         <div class="product">
            <div class="product-details">
               <?php echo $product1->printDetails(); ?>
            </div>
            <div class="product-location">
               <?php echo $product1->getLocation(); ?>
            </div>
         </div>

         <div class="product">
            <div class="product-details">
               <?php echo $product2->printDetails(); ?>
            </div>
            <div class="product-location">
               <?php echo $product2->getLocation(); ?>
            </div>
         </div>

         <div class="product">
            <div class="product-details">
               <?php echo $product1->printDetails(); ?>
            </div>
            <div class="product-location">
               <?php echo $product1->getLocation(); ?>
            </div>
         </div>

         <div class="product">
            <div class="product-details">
               <?php echo $product2->printDetails(); ?>
            </div>
            <div class="product-location">
               <?php echo $product2->getLocation(); ?>
            </div>
         </div>

         <div class="product">
            <div class="product-details">
               <?php echo $product1->printDetails(); ?>
            </div>
            <div class="product-location">
               <?php echo $product1->getLocation(); ?>
            </div>
         </div>

         <div class="product">
            <div class="product-details">
               <?php echo $product2->printDetails(); ?>
            </div>
            <div class="product-location">
               <?php echo $product2->getLocation(); ?>
            </div>
         </div>

         <div class="product">
            <div class="product-details">
               <?php echo $product1->printDetails(); ?>
            </div>
            <div class="product-location">
               <?php echo $product1->getLocation(); ?>
            </div>
         </div>

         <div class="product">
            <div class="product-details">
               <?php echo $product2->printDetails(); ?>
            </div>
            <div class="product-location">
               <?php echo $product2->getLocation(); ?>
            </div>
         </div>

         <div class="product">
            <div class="product-details">
               <?php echo $product1->printDetails(); ?>
            </div>
            <div class="product-location">
               <?php echo $product1->getLocation(); ?>
            </div>
         </div>

         <div class="product">
            <div class="product-details">
               <?php echo $product2->printDetails(); ?>
            </div>
            <div class="product-location">
               <?php echo $product2->getLocation(); ?>
            </div>
         </div>

         <div class="product">
            <div class="product-details">
               <?php echo $product1->printDetails(); ?>
            </div>
            <div class="product-location">
               <?php echo $product1->getLocation(); ?>
            </div>
         </div>

         <div class="product">
            <div class="product-details">
               <?php echo $product2->printDetails(); ?>
            </div>
            <div class="product-location">
               <?php echo $product2->getLocation(); ?>
            </div>
         </div>
      </main>

      <footer>
         <span>By Fabio</span>
      </footer>
   </div>

</body>
</html>