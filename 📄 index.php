<h2>Product List</h2>

<a href="/products/create">Add Product</a>

<table border="1">
<tr>
    <th>Name</th>
    <th>Price</th>
    <th>Stock</th>
    <th>Actions</th>
</tr>

<?php foreach($products as $p): ?>
<tr>
    <td><?= $p['name'] ?></td>
    <td><?= $p['price'] ?></td>
    <td><?= $p['stock'] ?></td>
    <td>
        <a href="/products/edit/<?= $p['id'] ?>">Edit</a>
        <a href="/products/delete/<?= $p['id'] ?>">Delete</a>
    </td>
</tr>
<?php endforeach; ?>
</table>