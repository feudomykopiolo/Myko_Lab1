<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products by Category</title>
    <style>
        *{
            font-family:Arial;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body style="background-color:burlywood ;">
    <div class="container mt-5">
        <h2 class="card-header" style="text-align: center;">Products with Category: <?= $category ?></h2>
        <table class="table table-bordered table-striped" style="background-color: gainsboro;">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Quantity</th>
                    <th>Product Price</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $p): ?>
                <tr>
                    <td><?= $p['ProductName'] ?></td>
                    <td><?= $p['ProductDescription'] ?></td>
                    <td><?= $p['ProductQuantity'] ?></td>
                    <td><?= $p['ProductPrice'] ?></td>
                </tr>
             <?php endforeach; ?>

            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-4j+3s1Pj8w6t4+XW3UvI3/5XpGy9Gg5xKv+Z6a7u8z5w+qQ9zJQzUew+0R6wXpG" crossorigin="anonymous"></script>
</body>
</html>
