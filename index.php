<?php
/**
 * Created by PhpStorm.
 * User: abraao
 * Date: 05/04/2018
 * Time: 09:44
 */

require __DIR__.'/vendor/autoload.php';


$cliente = new \App\Model\Cliente();
$test = new \App\Test\ClienteTest();

$test->testNome();