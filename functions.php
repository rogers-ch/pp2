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

        //create a new array to hold the unique items
        $newArray = [];

        foreach($array as $item) {

            //add item to $newArray if it is not already in $newArray
            if(!in_array($item, $newArray, true)) {
                array_push($newArray, $item);
            }
        }

        return $newArray;
    }

    return $array;
}

//distribution() takes an array as a parameter and returns an associative array
// with each value from the original array and the number of times that value
// occurs in the original array (Ex: [7,9,8,9,8,8,6] returns [6=>1, 7=>1, 8=>3, 9=>2])
function distribution($array) {
    if(!empty($array)) {   //make sure array is not empty

        //sort the array in ascending order
        sort($array);

        //create a new array to hold the unique items
        $newArray = [];

        foreach($array as $key) {

            if (array_key_exists($key, $newArray)) {
                //if key is already in $newArray, then add one to the value associated with the key
                $newArray[$key] += 1;
            }
            else {
                //if key is not in $newArray yet, then add key to $newArray with value of 1
                $newArray[$key] = 1;
            }

        }

        return $newArray;
    }
    return $array;

}