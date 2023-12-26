<?php

// $user_name = "mdarifmia";
// $password = "12345678";

// if ($user_name === "mdarifmia" && $password === "12345678") {
//     echo "Logged in successfully.";
// } else {
//     echo "Failed to log in. Provide your user name and password correctly.";
// }

$user_role = "";

if($user_role === "passenger") {
    echo "You can buy ticket and manage your own ticket and info from your dashboard";
}else if ($user_role === "bus_owner") {
    echo "You can add new bus, create new trip and manage your own bus, ticket and personal info";
} else if($user_role === "admin") {
    echo "You can manage passenger, bus, bus owner from own dashboard";
} else if ($user_role === "super_admin") {
    echo "You can manage general admin, passenger, bus, trip, bus owner";
}else{
    echo "Hey, you are a unauthenticated user. Try to login with valid information.";
}

?>