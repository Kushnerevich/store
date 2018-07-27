<?php
/**
 * Created by PhpStorm.
 * User: p.kushnerevich
 * Date: 27.7.18
 * Time: 17.14
 */
namespace App\Entity;

class Creditals
{
    /**
     * @var string
     * креды к базам
     * и свифт мейлеру
     */
    public $passwordDb = 'root';
    public $hostDB = '127.0.0.1';
    public $username = 'root';

    public function getCreditals() : Creditals
    {
        return $this;
    }
}