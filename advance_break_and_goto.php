<?php

/*

Go to statement

    echo "Md. ";

    goto Name;

    echo "Mia";

    Name:
    echo "Arif";

*/


    for($i = 1; $i <= 10; $i++) {
        for($j = 1; $j <= 10; $j++) {
            printf("%d x %d = %d\n", $i, $j, $i * $j);

            if($i === 5 && $j === 10) {
                break 2;
            }
        }

        echo "\n";
    }

?>