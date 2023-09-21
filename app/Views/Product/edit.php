<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="center-container">
        <div class="custom-form small-form">
            <h1 class="text-center">Edit Product</h1>
            <form action="/products/update/<?= $product['id'] ?>" method="post">
                <div class="form-group">
                    <label for="ProductName">Product Name:</label>
                    <input type="text" class="form-control" name="ProductName" id="ProductName" value="<?= $product['ProductName'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="ProductDescription">Product Description:</label>
                    <textarea class="form-control" name="ProductDescription" id="ProductDescription" rows="4"><?= $product['ProductDescription'] ?></textarea>
                </div>

                <div class="form-group">
                    <label for="Shoes_Category">Category:</label>
                    <select class="form-control" name="Shoes_Category" id="Shoes_Category" required>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= $category['id'] ?>" <?php if ($category['id'] == $product['Shoes_Category']) echo 'selected'; ?>>
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
                <a href="/products/delete/<?= $product['id'] ?>" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger btn-block">Delete</a>
            </form>
        </div>
    </div>
</body>
</html>