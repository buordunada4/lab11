<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'autoload.php';

$goodsData = [
    ["title" => "Lenovo Vibe Shot", "manufacturer" => "Lenovo", "price" => 9e3, "color" => "black"],
    ["title" => "Apple iPhone 7 128GB", "manufacturer" => "Apple", "price" => 9e4, "color" => "white"],
    ["title" => "Samsung Galaxy S8", "manufacturer" => "Samsung", "price" => 5e4, "color" => "grey"],
    ["title" => "Lenovo P2", "manufacturer" => "Lenovo", "price" => 2e4, "color" => "grey"],
    ["title" => "Xiaomi Mi6 128GB", "manufacturer" => "Xiaomi", "price" => 7e3, "color" => "white"],
    ["title" => "Xiaomi Mi Note 3 64Gb", "manufacturer" => "Xiaomi", "price" => 2e4, "color" => "black"],
];

$goodsCollection = new GoodsCollection();

foreach ($goodsData as $item) {
    $goodsCollection->add($item['title'], $item['manufacturer'], $item['price'], $item['color']);
}

$goodsCollection->show();
