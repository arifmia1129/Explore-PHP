<?php
    $names = array("Arif", "Binu", "Urmi", "Hannan","Sadiq", "Raisa");

    // echo $names[0];

    // foreach($names as $key=>$name) {
    //     echo "$key-$name\n";
    // }


    $infos = array(

        array("Arif", "24", "Software Developer", "Dhaka"),
        array("Binu", "22", "House Wife", "Gaibandha"),

    );


    $arr_len = count($infos);

    for($i = 0; $i < $arr_len; $i++){
        for($j = 0; $j < count($infos[$i]); $j++){
            echo $infos[$i][$j]."\n";
        }

        echo "\n";
    }

?>