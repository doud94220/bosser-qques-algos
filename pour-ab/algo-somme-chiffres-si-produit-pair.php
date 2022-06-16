<?php

/*
   It is asked to do a function which read an array of numbers as argument
   It calculate the product of the numbers is the array, and :
   - if the numbers product is even, it return the numbers sum.
   - if the numbers product is odd, it return 0
*/

function weirdOddEvenProductSumFunction($array)
{
    $sum = 0;
    $product = 1;

    for ($i = 0; $i < count($array); $i++) {
        $sum = $sum + $array[$i];
        $product = $product * $array[$i];
    }

    if ($product % 2 == 0) {
        return $sum;
    } else {
        return 0;
    }
}

//Test Even Product
$numbersArray = array(1, 2, 3, 4, 5);

//Test Odd Product
$numbersArray2 = array(1, 3, 7);

//Display the function result
echo weirdOddEvenProductSumFunction($numbersArray2);



/*
    COMMENTAIRES POUR MOI :
    Cet éxo, je crois que tout marchait
*/