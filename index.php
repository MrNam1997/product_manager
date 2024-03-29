<?php

include "model/ProductDB.php";
include "model/DBConnect.php";
include "model/Product.php";
include "controller/ProductController.php";

use controller\ProductController;

$controller = new ProductController();

$page = $_GET["page"] ? $_GET["page"] : null;
switch ($page) {
    case "add":
        $controller->add();
        break;
    case "delete":
        $controller->delete();
        break;
    case "edit":
        $controller->edit();
        break;
    default:
        $controller->index();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

</body>
</html>
