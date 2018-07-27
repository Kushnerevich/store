<?php
/**
 * Created by PhpStorm.
 * User: p.kushnerevich
 * Date: 27.7.18
 * Time: 16.50
 */

namespace App\Entity;

class Product
{
    public $idProduct;
    public $name;
    public $imageUrl;
    public $count;
    public $description;

    private $password;
    private $host;
    private $username;
    private $conn;

    public function __construct()
    {
        $creditals = new Creditals();
        $this->password = $creditals->getCreditals()->passwordDb;
        $this->username = $creditals->getCreditals()->username;
        $this->host = $creditals->getCreditals()->hostDB;
        $this->conn = mysqli_connect($this->host, $this->username, $this->password);
    }

    public function getProduct()
    {
        return $this;
    }

}