

<?php
$delete_item = 'april';
// take a list of months in an array
$months = array('jan', 'feb', 'march', 'april', 'may'); // for april, the key is 4
foreach (array_keys($months, $delete_item) as $key) {
    unset($months[$key]);
}

// print array to see latest values
var_dump($months);
?>


