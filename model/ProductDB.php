<?php


namespace model;

class ProductDB
{
    private $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products;";
        $stmt = $this->connect->query($sql);
        $arr = [];
        foreach ($stmt->fetchAll() as $item) {
            $product = new Product($item["name"], $item["amount"], $item["price"], $item["producer"]);
            $product->setId($item["id"]);
            array_push($arr, $product);
        }
        return $arr;

    }

    public function getInfoProduct($id)
    {
        $sql = "SELECT * FROM products WHERE id=$id";
        $statement = $this->connect->query($sql);
        return $statement->fetch();
    }

    public function edit($product)
    {
        $sql = "UPDATE products SET name = :name, amount = :amount, price = :price, producer = :producer WHERE id = 2";
        $statement = $this->connect->prepare($sql);
        $statement->bindParam(":name", $product->getName());
        $statement->bindParam(":amount", $product->getAmount());
        $statement->bindParam(":price", $product->getPrice());
        $statement->bindParam(":producer", $product->getProducer());
        var_dump($statement->execute());
    }

    public function add($product)
    {
        $sql = "INSERT INTO products (name,amount,price,producer) values (?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $product->getName());
        $stmt->bindParam(2, $product->getAmount());
        $stmt->bindParam(3, $product->getPrice());
        $stmt->bindParam(4, $product->getProducer());
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id = $id";
        $this->connect->query($sql);
    }
}