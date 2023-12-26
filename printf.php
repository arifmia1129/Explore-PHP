<?php
$name = "arif";
$age = 24;
$new_name = ucwords($name);

// echo "My name is: $new_name";
// echo "My name is: ".ucwords($name);

$details = "Name is: %s, age is: %s";

// printf("My name is %s, my age is %s", ucwords($name), $age);

// printf($details, ucwords($name), $age);
?>

<?php
$name = "Arif";
$age = 24;
$points = 10.5;
$is_married = true;

// printf("Name is: %s, age: %d, points: %f, marital status: %b", $name, $age, $points, $is_married);


$first_name = "Md. Arif";
$last_name = "Mia";

// printf('Last name is: %2$s and first name is %1$s', $first_name, $last_name);

// printf('My name is: %1$s, my first name also %1$s', $first_name);

$amount = 100;
$total_amount = $amount * 9.95;

// printf('Total amount is %.0f', $total_amount);
printf("Name is [%-'@10.2s]", $name);

?>