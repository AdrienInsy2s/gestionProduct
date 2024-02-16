<?php

require_once('dao/imp/IProductDaoImp.php');
require_once('model/Product.php');
$productDao = new IProductDaoImp();

$productDao->saveProduct("phone", 'AP', 99999999.90, 'un telephone');

// $prodcuts =  $productDao->getProductById(3);

// $prodcuts = $productDao->getProductsByName('ph');
// $prodcuts = $productDao->getProductsByPriceIn(1,10000);



print_r($prodcuts);


// $productDao->updateProduct("fait", 'AP001', 9, 'une voiture', 1);
// $productDao->deleteProduct(1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="bg-amber-200 p-4">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima harum totam fugit unde animi eligendi et error nulla cumque maiores veniam quae laboriosam delectus nam architecto, qui, voluptas ducimus aliquid.</p>
    </div>
</body>

</html>