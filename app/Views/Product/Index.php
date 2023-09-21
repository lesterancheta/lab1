<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container" >
        <div class="row">
            <div class="col">
                <h1 class="text-center">Product Listing</h1>
                <a href="/products/create" class="btn ">Add New Product</a>
                <ul class="list-group">
                    <?php foreach ($products as $product): ?>
                    <li class="list-group-item">
                        <a href="/products/edit/<?= $product['id'] ?>"><?= $product['ProductName'] ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>