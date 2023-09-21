<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!-- Add Bootstrap CSS Link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #dddddd;"> <!-- Use your desired shade of gray here -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center bg-dark text-white">
                    <h1>Add Product</h1>
                </div>
                <div class="card-body">
                    <form action="/product/store" method="post">
                        <div class="form-group">
                            <label for="ProductName">Product Name:</label>
                            <input type="text" class="form-control" name="ProductName" id="ProductName" required>
                        </div>

                        <div class="form-group">
                            <label for="ProductDescription">Product Description:</label>
                            <textarea class="form-control" name="ProductDescription" id="ProductDescription" rows="4"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="Laptop_Category_id">Category:</label>
                            <select class="form-control" name="Laptop_Category_id" id="Laptop_Category_id" required>
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ProductQuantity">Quantity:</label>
                            <input type="number" class="form-control" name="ProductQuantity" id="ProductQuantity" required>
                        </div>

                        <div class="form-group">
                            <label for="ProductPrice">Price:</label>
                            <input type="text" class="form-control" name="ProductPrice" id="ProductPrice" required>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Create Product</button>
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
