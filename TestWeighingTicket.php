<?php
// Schneider Arthur
declare(strict_types = 1);
require_once "WeighingTicket.php";

// question 3
$inconnu = new WeighingTicket;
$carotte = new WeighingTicket("Carotte");
$concombre = new WeighingTicket("Concombre",0.99);
$pommeDT = new WeighingTicket("Pomme de Terre",1.5,3000);

// question 4
echo "\nquestion 4\n";
echo $inconnu->getArticleName(), "\n";
echo $carotte->getWeight(), "\n";
echo $concombre->getPricePerKilogram(), "\n";
echo $pommeDT->getPrice(), "\n";
echo $pommeDT->getWeight(), "\n";

// question 5
echo "\nquestion 5 \n";
echo $inconnu->setArticleName('kiwi');
echo $inconnu->setPricePerKilogram(3.5);
echo $inconnu->setWeight(1050);
echo $inconnu->getPrice(),"\n";

// question 6
echo "\nquestion 6 \n";
echo $concombre->getWeight(),"av modif\n";
$concombre->weighing();
echo $concombre->getWeight(),"\n";

