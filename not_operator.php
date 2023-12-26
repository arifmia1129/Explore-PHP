<?php

$user_name = "arif1";
$user_name_length = strlen($user_name);

if(!($user_name_length >= 3 && $user_name_length <= 5)) {
    echo "Invalid user name";
}else{
    echo "Valid user name";
}


?>