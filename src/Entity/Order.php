<?php
/**
 * Created by PhpStorm.
 * User: p.kushnerevich
 * Date: 27.7.18
 * Time: 16.26
 */

namespace App\Entity;

use App\Entity\Creditals;

class Order
{
    public $email;
    public $name;
    public $soname;
    public $address;
    public $idProduct;

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

    public function getOrder()
    {
        return $this;
    }

    public function dbQuery($query)
    {
        mysqli_query($query, $this->conn);
    }

}