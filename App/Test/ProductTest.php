<?php
/**
 * Created by PhpStorm.
 * User: abraao
 * Date: 05/04/2018
 * Time: 10:52
 */
declare(strict_types=1);
namespace App\Test;

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{

    public function testIfIdIsNull()
    {
        $product = new \App\Model\Product;
        //$this->assertInstanceOf(\App\Model\Product::class ,$product->setId(1));
        $this->assertNull($product->getId());
    }

   /* public function testSetAndGetName()
    {
        $product = new \App\Model\Product;
        $this->assertNull($product->getName());
        $this->assertInstanceOf(\App\Model\Product::class ,$product->setName('Meu Produto 1'));
        $this->assertEquals('Meu Produto 1', $product->getName());
    }

    public function testSetAndGetPrice()
    {
        $product = new \App\Model\Product;
        $this->assertInstanceOf(\App\Model\Product::class ,$product->setPrice(10.00));
        $this->assertEquals(10.00, $product->getPrice());
    }

    public function testSetAndGetQuantity()
    {
        $product = new \App\Model\Product;
        $this->assertInstanceOf(\App\Model\Product::class ,$product->setQuantity(10));
        $this->assertEquals(10, $product->getQuantity());
    }


    public function testIfTotalIsNull()
    {
        $product = new \App\Model\Product;
        $this->assertNull($product->getTotal());
    }*/

    /**
     * @dataProvider collectionData
     */
    public function testEncapsulate($property, $expected, $actual) {
        $product = new \App\Model\Product;
        $null    = $product->{'get'.ucfirst($property)}();
        $this->assertNull($null);
        $result = $product->{'set'.ucfirst($property)}($actual);
        $this->assertInstanceOf(\App\Model\Product::class ,$result);
        $actual = $product->{'get'.ucfirst($property)}();
        $this->assertEquals($expected, $actual);
    }


    public function collectionData() {
        return [
            ['name', 'Produto 1', 'Produto 1'],
            ['price', 10.11, 10.11],
            ['quantity', 5, 5]
        ];
    }




}