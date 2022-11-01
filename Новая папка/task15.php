<?php

$num = readline("Enter the number to be checked: \n");
if (!is_numeric($num)) {
    echo "Enter a valid number";
} elseif ($num > 0) {
    echo "The entered number $num is positive";
} elseif ($num < 0) {
    echo "The entered number $num is negative";
} else {
    echo "The entered number $num is zero";
}



