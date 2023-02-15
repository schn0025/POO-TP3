<?php
// Schneider Arthur
declare(strict_types = 1);

class Polygon{
    private array $verices ;
// question1
    /**
     * __construct construit l'objet Polygone en dupliquant les parametre et en les
     * assigent au parametre d'instance
     * @param $tab tableau de point
     */
    public function __construct(array $tab)
    {
        $this->verices = array();
        for($i = 0; $i<count($tab); $i++){
            $this->verices[$i] = clone $tab[$i];
        }
// question 2
    /** 
     * getVerticesNumber renvoi le nombre de sommet que contient le poligone 
     * @return int renvoi le nombre de somet du polygon
     */
    }
    public function getVerticesNumber(): int
    {
        return count($this->verices);
    }
// Question 3
    /**
     * isEmpty regarde ci la liste de verices est vide ou non
     * @return bool renvoi True ci verices est vide False cinon
     */
    public function isEmpty(): bool
    {
        $rep = false;
        if($this->getVerticesNumber() == 0){
            $rep = True;
        }
        return $rep;
    }
// Question 4
    /**
     * getPerimeter calcule et renvoi le perimetre du polygon
     * @return float renvoi le preimetre du polygone
     */
    public function getPerimeter(): float
    {
        $p = 0;
        for($i=0 ; $i<$this->getVerticesNumber()-1;$i++){
            $segment = new Segment($this->verices[$i],$this->verices[$i+1]);
            $p += $segment->getLength();
        }
        $segment += new Segment($this->verices[$this->getVerticesNumber()-1],$this->verices[0]);
        $p += $segment->getLength();
        return $p;
    }
}