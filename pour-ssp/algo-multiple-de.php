<?php

/*
    Ecrire une fonction qui prendre un chiffre en paramètre (> 0) et qui fait la somme de tous les multiples de 3,5,7 précédant ce chiffre
*/

function sommeMultiplesDeTroisCinqSeptPrecedentUnChiffre($n)
{
    $somme = 0;

    for ($i = 1; $i < $n; $i++) {
        if ($i % 3 == 0) {
            $somme = $somme + $i;
        } elseif ($i % 5 == 0) {
            $somme = $somme + $i;
        } elseif ($i % 7 == 0) {
            $somme = $somme + $i;
        }
    }

    return $somme;
}

echo sommeMultiplesDeTroisCinqSeptPrecedentUnChiffre(22);
