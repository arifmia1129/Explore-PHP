<?php
$user_name = "arif1";
$password = "1234567";

if($user_name === "arif") {
    if($password === "123456") {
        echo "Valid user";
    }else{
        echo "Invalid password";
    }
}else{
    echo "Invalid user name";
}

?>