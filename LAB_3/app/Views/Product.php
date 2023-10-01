<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-color: burlywood;">
    <div class="container mt-5" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 style="font-size: 2em; text-align: center;">Product Add</h2>
                    </div>
                    <div class="card-body">
                        <form action="/update" method="post" style="max-width: 400px; margin: 0 auto;">
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label style="color: black;">ProductName</label>
                                <input type="hidden" name="id" value="<?= $tab['id'] ?>" class="form-control">
                                <input type="text" name="ProductName" placeholder="ProductName"
                                    value="<?= $tab['ProductName'] ?>" class="form-control" style="color: black; width: 100%; padding: 5px;">
                            </div>
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label style="color: black;">Description</label>
                                <input type="text" name="Description" placeholder="Description"
                                    value="<?= $tab['Description'] ?>" class="form-control" style="color: black; width: 100%; padding: 5px;">
                            </div>
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label style="color: black;">Category</label>
                                <input type="text" name="Category" placeholder="Category"
                                    value="<?= $tab['Category'] ?>" class="form-control" style="color: black; width: 100%; padding: 5px;">
                            </div>
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label style="color: black;">Quantity</label>
                                <input type="text" name="Quantity" placeholder="Quantity"
                                    value="<?= $tab['Quantity'] ?>" class="form-control" style="color: black; width: 100%; padding: 5px;">
                            </div>
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label style="color: black;">Price</label>
                                <input type="text" name="Price" placeholder="Price" value="<?= $tab['Price'] ?>"
                                    class="form-control" style="color: black; width: 100%; padding: 5px;">
                            </div>
                            <div class="form-group" style="margin-bottom: 15px;">
                                <label style="color: black;">Image</label>
                                <input type="text" name="Image" placeholder="Image" value="<?= $tab['Image'] ?>"
                                    class="form-control" style="color: black; width: 100%; padding: 5px;">
                            </div>
                            <div class="form-group" style="margin-bottom: 15px;">
                                <input type="submit" value="Save" class="btn btn-primary"
                                    style="color: white; background-color: #007bff; border-color: #007bff;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
