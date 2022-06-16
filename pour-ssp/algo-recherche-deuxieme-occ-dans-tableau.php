<?php

/*
    Ecrire une fonction qui prend ce tableau de string en paramètre :
    {"rouge", "blanc", "bleu", "vert", "jaune", "bleu", "rose", "violet", "noir"}
    et qui retourne la position de la 2ème occurence de "bleu" dans le tableau
*/

function retourneDeuxiemeOccurenceDuneCouleurDansLeTableau($tableau, $couleur)
{
    $compteur = 0;

    for ($i = 0; $i < count($tableau); $i++) {
        if ($tableau[$i] == $couleur) {
            $compteur++;

            if ($compteur == 2) {
                return $i; //pas besoin de break => on sort de la boucle for
            }
        }
    }
}

$tableau = array("rouge", "blanc", "bleu", "vert", "jaune", "bleu", "rose", "violet", "noir");
$couleur = "bleu";

echo retourneDeuxiemeOccurenceDuneCouleurDansLeTableau($tableau, $couleur);

////Il me semble qu'il m'a demandé d'utiliser un foreach à la place dune boucle for, mais ca n'apporte rien...

// function memeChoseAvecForEach($tableau, $couleur)
// {
//     $compteur = 0;

//     $positionDansLeTableau = 0;

//     foreach ($tableau as $key => $value) {

//         if ($value == $couleur) {
//             $compteur++;

//             if ($compteur == 2) {
//                 return $positionDansLeTableau;
//             }
//         }

//         $positionDansLeTableau++;
//     }
// }

// echo memeChoseAvecForEach($tableau, $couleur);
