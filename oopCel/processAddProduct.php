<?php
include 'functions.php';

$productData = $_POST;
$product = new Product();
$product->fromArray($productData);
$product->save();

//$id = insert(Product::class, $newProduct);
header('Location:addProduct.php');

