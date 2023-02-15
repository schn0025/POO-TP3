<?php
// Schneider Arthur
declare(strict_types = 1);

require_once "Point.php";
require_once "Polygon.php";
require_once "Segment.php";

// fonction d'autre ex
function decodeBooleen(bool $boul): string
{
    $rep = "Faux";
    if ($boul)
        $rep = "Vrai";
    return $rep;
}

$P1 = new Point(0,1);
$P2 = new Point(1,2);
$P3 = new Point(2,2);
$P4 = new Point(3,1);
$P5 = new Point(2,0);
$P6 = new Point(1,0);

$lstPoints = array($P1, $P2, $P3, $P4, $P5, $P6);

//Question 1
$poly = new Polygon($lstPoints);

// question 2
echo "\n question2\n";
echo $poly->getVerticesNumber(),"\n";

// question 3
echo "\n question3\n";
$polyVide = new Polygon(array());
echo decodeBooleen($poly->isEmpty()),"\n";
echo decodeBooleen($polyVide->isEmpty()),"\n";

// Question 4
echo "\n question4\n";
echo $poly->getPerimeter(),"\n";