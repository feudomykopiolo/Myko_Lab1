<body style="background-color:blanchedalmond;">
<div class="container mt-5" style="margin-top: 50px;">

    <h1 class="title" style="font-size: 2em; text-align: center;">Add a Product</h1>

    <form action="/save" class="form" method="post" style="max-width: 400px; margin: 0 auto;">

        <div class="form-group" style="margin-bottom: 15px;">
            <label for="ProductName" class="label" style="font-weight: bold;">ProductName:</label>
            <input type="text" class="form-control" name="ProductName" id="ProductName" required style="width: 100%; padding: 5px;">
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <label for="Description" class="label" style="font-weight: bold;">Description:</label>
            <input type="text" class="form-control" name="Description" id="Description" required style="width: 100%; padding: 5px;">
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <label for="Category" class="label" style="font-weight: bold;">Category:</label>
            <input type="text" class="form-control" name="Category" id="Category" required style="width: 100%; padding: 5px;">
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <label for="Quantity" class="label" style="font-weight: bold;">Quantity:</label>
            <input type="text" class="form-control" name="Quantity" id="Quantity" required style="width: 100%; padding: 5px;">
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <label for="Price" class="label" style="font-weight: bold;">Price:</label>
            <input type="text" class="form-control" name="Price" id="Price" required style="width: 100%; padding: 5px;">
        </div>

        <div class="form-group" style="margin-bottom: 15px;">
            <label for="Image" class="label" style="font-weight: bold;">Image:</label>
            <input type="text" class="form-control" name="Image" id="Image" required style="width: 100%; padding: 5px;">
        </div>

        <input type="submit" value="Save" class="btn btn-primary" style="width: 100%; padding: 10px; background-color: #007bff; color: #fff; border: none; cursor: pointer;">

    </form>

</div>
</body>