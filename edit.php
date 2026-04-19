<h2>Edit Product</h2>

<form method="post" action="/products/update/<?= $product['id'] ?>">
    Name: <input type="text" name="name" value="<?= $product['name'] ?>"><br>
    Price: <input type="text" name="price" value="<?= $product['price'] ?>"><br>
    Stock: <input type="text" name="stock" value="<?= $product['stock'] ?>"><br>
    <button type="submit">Update</button>
</form>