<?php

/*
    Write a function which take 5 grades for arguments, and that calculate the average of the 3 best grades.
    Grades should be between 0 and 100. So :
    - if you have a grade lower to 0 => the function return -1
    - if you have a grade superior to 100 => the function return -2
*/

function bestGradesAverage($n1, $n2, $n3, $n4, $n5)
{
    $gradesArray = array($n1, $n2, $n3, $n4, $n5);
    sort($gradesArray);
    $threeBestGradesSum = $gradesArray[2] + $gradesArray[3] + $gradesArray[4];
    $threeBestGradesAverage = round($threeBestGradesSum / 3, 0, PHP_ROUND_HALF_UP);
    return $threeBestGradesAverage;
}

echo bestGradesAverage(68, 11, 44, 22, 55);

///// First tests without a function
// $gradesArray = array(68, 11, 44, 22, 55);
// sort($gradesArray);
// $threeBestGradesSum = $gradesArray[2] + $gradesArray[3] + $gradesArray[4];
//echo $threeBestGradesSum;
// die;
// $threeBestGradesAverage = round($threeBestGradesSum / 3, 0, PHP_ROUND_HALF_UP);
// echo $threeBestGradesAverage;



/*
    COMMENTAIRES POUR MOI :
    Cet éxo j'avais 1 cas sur les 4 qui ne marchait pas, j'avais 42 et eux avait 41...bizarre...
    A noter que mon code gérait bien le fait d'arrondir à l'entier le plus proche.

    A froid, je pense que je maîtrise tout !
*/