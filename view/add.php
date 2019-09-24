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
<form method="post" action="index.php?page=add">
    <div class="form-group">
        <input class="form-control" type="text" name="name" placeholder="Enter Product Name">
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="amount" placeholder="Enter amount">
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="price" placeholder="Enter price">
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="producer" placeholder="Enter producer">
    </div>
    <input class="btn btn-primary" type="submit" value="submit">
    <input class="btn btn-dark" type="button" onclick="window.location='index.php'" value="Cancel">

</form>
</body>
</html>