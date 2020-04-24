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

//removeDups() takes an array as a parameter and returns a sorted array with duplicates removed
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