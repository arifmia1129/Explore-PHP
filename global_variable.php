<?php
    $first_name = "Md. Arif";

    function full_name () {
        global $first_name;
        $last_name = "Mia";

        echo $first_name." ".$last_name."\n";
    }


    full_name();
?>