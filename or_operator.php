<?php
$user_role = "user";

if($user_role === "admin" || $user_role === "super_admin") {
    echo "Yes, you can manage other user";
}else{
    echo "No, you can't manage other user";
}

?>