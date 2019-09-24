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
<form method="post" >
    <div class="form-group">
        <input class="form-control" type="hidden" name="id" value="<?php echo $product->getId()?>">
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="name" value="<?php echo $product->getName()?>">
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="amount" value="<?php echo $product->getAmount()?>">
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="price" value="<?php echo $product->getPrice()?>">
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="producer" value="<?php echo $product->getProducer()?>">
    </div>
    <input class="btn btn-primary" type="submit" value="submit">
    <input class="btn btn-dark" type="button" onclick="window.location='index.php'" value="Cancel">

</form>
</body>
</html>