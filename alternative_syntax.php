<?php

    /*
    // if else alternative syntax
    $role = "user";

    if($role === "admin"):
        echo "You can manage overall system";
    elseif ($role === "user"):
        echo "You can manage your own info only";
    else:
        echo "Unauthenticated";


    endif;
    */

    
    /*
    // switch case alternative syntax

    $role = "";

    switch($role):
        case "admin":
            echo "You can manage system";
            break;
        case "user":
            echo "You can manage your own info";
            break;
        default:
            echo "Unauthenticated user";

    endswitch;
    */


    // alternative for loop syntax:

    for($serial=1; $serial <= 10; $serial++):
        echo "Serial-$serial\n";
        
    endfor;

?>