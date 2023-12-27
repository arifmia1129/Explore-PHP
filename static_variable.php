<?php
    function count_order() {
        static $count = 0;
        $count++;
        echo "$count\n";
    }

    count_order();
    count_order();
    count_order();
?>