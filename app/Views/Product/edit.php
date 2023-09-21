<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <!-- Add Bootstrap CSS Link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #dddddd; /* Gray background color */
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center bg-dark text-white">
                    <h1>Edit Product</h1>
                </div>
                <div class="card-body">
                    <form action="/product/update/<?= $product['id'] ?>" method="post">
                        <div class="form-group">
                            <label for="ProductName">Product Name:</label>
                            <input type="text" class="form-control" name="ProductName" id="ProductName" value="<?= $product['ProductName'] ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="ProductDescription">Product Description:</label>
                            <textarea class="form-control" name="ProductDescription" id="ProductDescription" rows="4"><?= $product['ProductDescription'] ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="Laptop_Category_id">Category:</label>
                            <select class="form-control" name="Laptop_Category_id" id="Laptop_Category_id" required>
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?= $category['id'] ?>" <?php if ($category['id'] == $product['Laptop_Category_id']) echo 'selected'; ?>>
                                        <?= $category['name'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ProductQuantity">Quantity:</label>
                            <input type="number" class="form-control" name="ProductQuantity" id="ProductQuantity" value="<?= $product['ProductQuantity'] ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="ProductPrice">Price:</label>
                            <input type="text" class="form-control" name="ProductPrice" id="ProductPrice" value="<?= $product['ProductPrice'] ?>" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Update Product</button>
                        <a href="/product/delete/<?= $product['id'] ?>" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger btn-block">Delete</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
