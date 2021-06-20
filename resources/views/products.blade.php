<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Products</title>
        <link rel="stylesheet" href="/app.css">
</head>
    <body>
       <div class="container">
       <h1>Products</h1>
       <?php foreach($products as $product): ?>
       <article>
          <h2><a href="/product"><?php echo $product['product_name']; ?></a></h2>
          <p><?php echo $product['product_desc']; ?></p>
          </article>
         <?php endforeach; ?>
       </div>
    </body>
</html>
