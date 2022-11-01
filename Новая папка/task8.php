<?php

//Task8


for ($z = 1; $z <= 8; $z ++) {
    for ($v = 1; $v <= $z; $v ++) {
        echo "*";

        if ($v < $z) {
            echo " ";
        }
    }

    echo "<br>";
}
