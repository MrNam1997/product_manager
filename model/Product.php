<?php


namespace model;


class Product
{
    private $id;
    private $name;
    private $producer;
    private $amount;
    private $price;

    public function __construct($name, $producer, $amount, $price)
    {
        $this->name = $name;
        $this->producer = $producer;
        $this->amount = $amount;
        $this->price = $price;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setProducer($producer)
    {
        $this->producer = $producer;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function getProducer()
    {
        return $this->producer;
    }

}