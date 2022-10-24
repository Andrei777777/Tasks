<?php
$itemToDelete = 'april';

$months = array('jan', 'feb', 'march', 'april', 'may');

foreach (array_keys($months, $itemToDelete) as $key) {
    unset($months[$key]);
}

var_dump($months);
