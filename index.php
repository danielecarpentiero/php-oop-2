<?php
/* implementazioni */
require_once 'models/product.php';
require_once 'database/items.php';
/* /implementazioni */

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP OOP 2</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <!-- /bootstrap -->
</head>

<body>
  <div class="container">
    <h2>Dettagli prodotti:</h2>
    <!-- iterazione prodotti standard -->
    <?php foreach ($result as $productData) : ?>
      <?php
      $product = new Product(
        $productData['name'],
        $productData['price'],
        $productData['category'],
        $productData['is_available']
      );
      /* /iterazione prodotti standard */
      /* iterazione prodotti personalizzati */

      if (isset($productData['is_for_dogs'])) {
        $product->is_for_dogs = $productData['is_for_dogs'];
      }

      if (isset($productData['is_for_cats'])) {
        $product->is_for_cats = $productData['is_for_cats'];
      }

      if (isset($productData['calories'])) {
        $product->calories = $productData['calories'];
      }

      if (isset($productData['type'])) {
        $product->type = $productData['type'];
      }

      if (isset($productData['material'])) {
        $product->material = $productData['material'];
      }

      if (isset($productData['size'])) {
        $product->size = $productData['size'];
      }
      ?>
      <!-- /iterazione prodotti personalizzati -->
      <!-- rappresentazione in pagina -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?= $product->name ?></h5>
          <p class="card-text">Prezzo: <?= $product->price ?> euro</p>
          <p class="card-text">Categoria: <?= $product->category ?></p>
          <p class="card-text">Disponibile: <?= $product->is_available ? 'Sì' : 'No' ?></p>

          <?php if (isset($product->is_for_dogs)) : ?>
            <p class="card-text">Per cani: <?= $product->is_for_dogs ? 'Sì' : 'No' ?></p>
          <?php endif; ?>

          <?php if (isset($product->is_for_cats)) : ?>
            <p class="card-text">Per gatti: <?= $product->is_for_cats ? 'Sì' : 'No' ?></p>
          <?php endif; ?>

          <?php if (isset($product->calories)) : ?>
            <p class="card-text">Calorie: <?= $product->calories ?> kcal</p>
          <?php endif; ?>

          <?php if (isset($product->type)) : ?>
            <p class="card-text">Tipo: <?= $product->type ?></p>
          <?php endif; ?>

          <?php if (isset($product->material)) : ?>
            <p class="card-text">Materiale: <?= $product->material ?></p>
          <?php endif; ?>

          <?php if (isset($product->size)) : ?>
            <p class="card-text">Dimensioni: <?= $product->size ?></p>
          <?php endif; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <!-- /rappresentazione in pagina -->
</body>

</html>