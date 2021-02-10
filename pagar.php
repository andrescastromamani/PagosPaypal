<?php

if(!isset($_POST['producto'], $_POST['precio'])){
    exit('Hubo un error');
}

use PayPal\Api\Payer;
use PayPal\Api\Item;

require 'config.php';
$producto = htmlspecialchars($_POST['producto']);
$precio = htmlspecialchars($_POST['precio']);
$precio = (int)$precio;
//var_dump($precio);
$envio = 0;
$total = $precio + $envio;

$compra = new Payer();
$compra->setPaymentMethod('paypal');
//echo $compra->getPaymentMethod();//obter el metodo de pago
$articulo = new Item();
$articulo->setName($producto)
         ->setCurrency('USD')
         ->setQuantity(1)
         ->setPrice($precio);

echo $articulo->getQuantity();
echo $articulo->getName();
echo $articulo->getPrice();