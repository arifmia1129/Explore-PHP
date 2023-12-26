<?php
$name = "arif";
$age = 24;
$new_name = ucwords($name);

// echo "My name is: $new_name";
// echo "My name is: ".ucwords($name);

$details = "Name is: %s, age is: %s";

// printf("My name is %s, my age is %s", ucwords($name), $age);

printf($details, ucwords($name), $age);
?>