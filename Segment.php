<?php
// Schneider Arthur
declare(strict_types = 1);


// question 12
class Segment{
    private Point $start;
    private Point $end;
// question 13
    /**
     * constructeur de la classe Segment. il attibut les valeur des argument passer en
     * parametre au attrubut strat et end.
     * @param Point $start
     * @param Point $end
     */
    public function __construct(Point $start, Point $end)
    {
        $this->start = clone $start;
        $this->end = clone $end;
        /*
        $this->start = new Point($start->getX(),$start->getY());
        $this->end = new Point($end->getX(),$end->getY());
        */
    }
// question 14
    /**
     * __toString indique comment interpreter l'instance de Segement l'orcequ'il est
     * appeler au format string
     * @return string chaine a afficher au format string
     */
    public function __toString():string
    {
        return "[ $this->start , $this->end ]";
    }
// question 15
    /**
     * getStart permet d'acceder au valeur du point de depart du degement.
     * @return Point copie du point de depart.
     */
    public function getStart () : Point
    {
        // $copiStart = new Point($this->start->getX(), $this->start->getY());
        $copiStart = clone $this->start;
        return $copiStart;
    }
// question 16
    /**
     * setStart permet de modifier le point de depart du segment.
     * @param point $start nouveau point de depart.
     * @return void
     */
    public function setStart(point $start): void
    {
        //$this->start = new Point($start->getX(), $start->getY());
        $this->start = clone $start;
    }
// question 17
    /**
     * translation premet de déplacer les deux point du segment de la même distance
     * @param $x translation en x
     * @param $y translation en y 
     * @return void   
     */
    public function translation(int $x, int $y): void
    {
        $this->start->translation($x, $y);
        $this->end->translation($x, $y);
    }
// question 18
    /** 
     * getLength permet de conaitre la longeurs d'un segment
     * @return Float renvoi la longeur du seement avec un float
     */
    public function getLength(): float
    {
        return sqrt(pow(($this->start->getX()-$this->end->getX()),2)+pow(($this->start->getY()-$this->end->getY()),2));
    }
// question 19
    /**
     * isLongerThan compart la taille d'un segment avec celle d'un autre.
     * @param $segment2 le segment au quel on compart le segment d'origine
     * @return bool renvoi True
     * ci le segment d'origine est plus grand que celui passer
     * en parametre et False cinon.
     */
    public function isLongerThan( Segment $segment2 ) : bool
    {
        $rep = False;
        if($this->getLength()>$segment2->getLength()){
            $rep = True;
        }
        return $rep;
    }
// question 20
    /**
     * isEqual permet de voir ci deux segments sont egeaux
     * @param $segment2 le segment au quel on compart le segment d'origine
     * @return bool renvoi True
     * ci le segment d'origine est egale a celui passer
     * en parametre et False cinon.
     */
    public function isEqual(Segment $segment2): bool
    {
        $rep = false;
        if($this->start == $segment2->start && $this->end == $segment2->end){
            $rep = True;
        }
        
        return $rep;
    }
// question 21
    public function __clone()
    {
        $this->start = clone $this->start;
        $this->end = clone $this->end;
    }
}