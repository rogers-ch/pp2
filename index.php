<?php

/*  Name:   Corey Rogers
 *  Date:   04/17/2020
 *  URL:    https://chrogers.greenriverdev.com/328/pp2/index.php
 *  Title:  Pair Program 2
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>
    <h1>Pair Program 2</h1>

    <?php

    echo "<h2>PHP Array Practice.</h2>";

    //Define an array $numbers which contains 7, 9, 8, 9, 8, 8, 6
    $numbers = [7, 9, 8, 9, 8, 8, 6];

    include('functions.php');

    //Call the printArr() function and pass it the $numbers array
    echo "<h3>(2) and (3) - printArr() function</h3>";
    printArr($numbers);
    echo "<br>";

    //Call the largest() function and pass it the $numbers array
    echo "<h3>(4) - largest() function</h3>";
    echo "Largest value = " . largest($numbers) . "<br>";
    echo "<br>";

    //Call the removeDups() function and pass it the $numbers array, print the result
    echo "<h3>(5) - removeDups() function</h3>";
    $numbersMod = removeDups($numbers);
    printArr($numbersMod);
    echo "<br>";

    //Call the distribution() function and pass it the $numbers array, print the result
    echo "<h3>(6) - distribution() function</h3>";
    $numbersDist = distribution($numbers);

    foreach ($numbersDist as $key => $value) {
        echo $key . "=>" . $value . "<br>";
    }

    echo "<br>";


    /*  Additional test code - for empty array input

    //Define empty array and test methods with empty array
    $array = [];

    printArr($array);

    echo "Largest value = " . largest($array) . "<br>";

    $arrayMod = removeDups($array);
    printArr($arrayMod);
    echo "<br>";

    $arrayMod2 = distribution($array);
    foreach ($arrayMod2 as $key => $value) {
        echo $key . "=>" . $value . "<br>";
    }
    echo "<br>";

    */

    ?>

</body>
</html>