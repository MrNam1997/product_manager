<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="container">
<a href="index.php?page=add">
    <button>add</button>
</a>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Amount</th>
        <th>Price</th>
        <th>Producer</th>
    </tr>
    </thead>
    <?php foreach ($products as $key => $product): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $product->getName() ?></td>
            <td><?php echo $product->getAmount() ?></td>
            <td><?php echo $product->getPrice() ?></td>
            <td><?php echo $product->getProducer() ?></td>
            <td><button onclick="window.location='index.php?page=delete&id=<?php echo $product->getId()?>'">Delete</button></td>
            <td><button onclick="window.location='index.php?page=edit&id=<?php echo $product->getId()?>'">Edit</button></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>