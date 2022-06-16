<?php

/*
    POO :

    You have to do a function that build a pyramid of stars (or bricks if you prefer), with an odd number of stars for each lines.
    But there is a margin around the stars so that each line has the same length.

    For example for 3 stages, it shoud return this :
    '  *  '
    ' *** '
    '*****'

    And for 6 stages, it should retun that :
    '     *     '
    '    ***    '
    '   *****   '
    '  *******  '
    ' ********* '
    '***********'

    Use the existing code with the two notably methods for creating the stars and the margins.
    In the existing code, the addMargin() and addBricks() methods are not used with an argument.
    => and the comments that I found precised that we can add arguments to these methods.
*/

//Existing code (in which I implement my work)

class Building
{
    protected $height;
    protected $pyramidBuild = []; //I don't remember if an array was used

    public function __construct($floor)
    {
        $this->height = $floor;
        $this->build($floor);
        return $this;
    }

    protected function build($floor)
    {
        for ($i = 1; $i <= $floor; $i++) {
            $marginLeft = $this->addMargin($i); //I add an argument to these method call
            $ligneOfBricks = $this->addBricks($i); //I add an argument to these method call
            $marginRight = $this->addMargin($i); //I add an argument to these method call

            array_push($this->pyramidBuild, $marginLeft . $ligneOfBricks . $marginRight); //I don't remember if an array push was used
        }
    }

    //The main work is this method addMargin()
    public function addMargin($currentFloor)
    {
        $sizePyramid = $this->height; //pyramid size not fixed in the code like in the older version

        $margin = "";

        for ($j = $currentFloor; $j < $sizePyramid; $j++) //generic calculation of margin number for each floor
        {
            $margin .= " ";
        }

        return $margin;
    }

    //The main work is this method addBricks() too
    public function addBricks($currentFloor)
    {
        $sizePyramid = $this->height; //pyramid size not fixed in the code like in the older version

        $nbStars = $currentFloor + ($currentFloor - 1); //generic calculation of stars number for each floor
        $starsLine = "";

        for ($k = 1; $k <= $nbStars; $k++) {
            $starsLine .= "*";
        }

        return $starsLine;
    }

    //I don't remember if this method was there
    public function readBricksPyramid()
    {
        return $this->pyramidBuild;
    }
}

//Test with 13 floors
$floor = 13;
$buildingTest = new Building($floor);
$bricksPyramidArray = $buildingTest->readBricksPyramid();
var_dump($bricksPyramidArray);



/*
    COMMENTAIRES POUR MOI :
    Pas facile de retrouver le code de départ => Dur de se remémorer d'un code en POO de qqn d'autre.
    Aussi le code réagit différement sur mon serveur d'app (marges de gauche absentes) par rapport à "l'environnement du test en ligne"...
*/