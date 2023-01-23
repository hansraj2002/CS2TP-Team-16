<?php
$devices = array(
    array("name" => "iPhone 12", "price" => 799),
    array("name" => "Samsung Galaxy S21", "price" => 999),
    array("name" => "Google Pixel 5", "price" => 699),
    array("name" => "OnePlus 8T", "price" => 749)
);

foreach ($devices as $device) {
    echo $device["name"] . " - $" . $device["price"] . "<br>";
}
?>