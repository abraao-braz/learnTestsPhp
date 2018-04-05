<?php
/**
 * Created by PhpStorm.
 * User: abraao
 * Date: 05/04/2018
 * Time: 10:46
 */


declare(strict_types=1);

namespace App\Model;


class Product
{

    private $id;
    private $name;
    private $price;
    private $quantity;
    private $total;


    /**
     * @return mixed
     */
    public function getId() : ?int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id) : Product
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName() : ?string
    {
        return $this->name;

    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;

    }

    /**
     * @return mixed
     */
    public function getPrice() :?float
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;

    }

    /**
     * @return mixed
     */
    public function getTotal() : ?float
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;

    }




}