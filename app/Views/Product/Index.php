<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Add Bootstrap CSS Link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid bg-secondary" style="min-height: 100vh; display: flex; justify-content: center; align-items: center;">
    <div class="row">
        <div class="col text-center">
            <h1>Product Listing</h1>
            <a href="/product/create" class="btn btn-primary">Add New Product</a>
            <ul class="list-group">
                <?php foreach ($products as $product): ?>
                <li class="list-group-item">
                    <a href="/product/edit/<?= $product['id'] ?>"><?= $product['ProductName'] ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Add Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
