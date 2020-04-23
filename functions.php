<?php

//printArr() takes an array as a parameter and prints the array, one item per line
function printArr($array) {
    foreach ($array as $item) {
        echo "$item <br>";
    }
}

//largest() takes an array as a parameter and returns the largest value in the array
function largest($array) {
    if(!empty($array)) {
        $largest = $array[0];

        foreach ($array as $item) {
            if ($item > $largest) {
                $largest = $item;
            }
        }

        return $largest;
    }

    return "Array is empty";

}