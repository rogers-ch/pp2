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

//removeDups() takes an array as a parameter and returns an array with duplicates removed
function removeDups($array) {
    if(!empty($array)) {   //make sure array is not empty

        //sort the array in ascending order
        sort($array);

        //create a new array to hold the unique items and push the first item from $array
        $newArray = [];
        array_push($newArray, $array[0]);

        //push each item to the new array if it is not a duplicate
        for ($i = 1; $i < sizeof($array); $i++) {
            if ($array[$i] != $array[$i - 1]) {
                array_push($newArray, $array[$i]);
            }
        }
        return $newArray;
    }
    return $array;
}