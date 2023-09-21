<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cool Product Listing</title>

    <!-- Add Bootstrap CSS Link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #333333;
        }

        .container-fluid {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {
            font-size: 36px;
            color: #ffffff;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .list-group {
            width: 100%;
            max-width: 400px;
            margin-top: 20px;
        }

        .list-group-item {
            background-color: #ffffff;
            border-color: #cccccc;
            font-size: 18px;
            margin-top: 10px;
        }

        .list-group-item a {
            color: #333333;
            text-decoration: none;
        }

        .list-group-item:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <h1 class="text-center">Cool LAPTOP Product Listing</h1>
    <a href="/product/create" class="btn btn-primary">Add New Product</a>
    <ul class="list-group">
        <?php foreach ($products as $product): ?>
        <li class="list-group-item">
            <a href="/product/edit/<?= $product['id'] ?>"><?= $product['ProductName'] ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
</div>

<!-- Add Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
