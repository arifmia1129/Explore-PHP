<?php
#Today we learn about comments in PHP

// Price calculation code

/*
In this system we learn how to make comment in php. If you want to do single line comment we can use two methods. First is start your comment line with # and another is start your comment with //. If you want to do multiple line comment we can use / * write comment here * /
*/

$product_price = 100; //actual product price
$vat = 10; //included vat

$total_product_price = $product_price + $vat; //total price 

echo "Total product price is: $total_product_price"; //print total price

?>