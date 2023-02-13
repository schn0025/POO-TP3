<?php
// Schneider Arthur
declare(strict_types = 1);

require_once "Point.php";
require_once "Segment.php";

// question 8
echo "question 8\n";
$null = new Point;
$point1 = new Point(2,5);
var_dump($null);
echo "\n";
var_dump($point1);
echo "\n";

// question 9
echo "\nquestion 9\n";
echo $point1->getX(),"\n";
echo $null->getY(),"\n";

// Question 10
echo "\nquestion 10\n";
echo $null, "\n", $point1, "\n";

// question 11
echo "\nquestion 11\n";
echo " $null av translation\n";
$null->translation(10, 2);
echo "$null\n ";

// question 13
echo "\nquestion 13\n";
$segment1 = new Segment( $null , $point1);
var_dump($segment1);

// question 14
echo "\nquestion 14\n";
echo "$segment1 \n";

// question 15
echo "\nquestion 15\n";
echo $segment1,"\n";
$segment1->getStart()->translation(10, 10);
echo $segment1,"\n";

// question 16
echo "\nquestion 16\n";
echo "av modif $segment1 \n";
$nouvStart = new Point(0.1,0.2);
$segment1->setStart($nouvStart);
echo $segment1,"\n";
$nouvStart->translation(10, 10);
echo " appres modification $segment1\n";


// question 17
echo "\nquestion 17\n";

/*
// question 18
echo "\nquestion 18\n";

// question 19
echo "\nquestion 19\n";

// question 20
echo "\nquestion 20\n";

// question 21
echo "\nquestion 21\n";
*/