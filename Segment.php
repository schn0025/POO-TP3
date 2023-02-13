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
        $this->start = new Point($start->getX(),$start->getY());
        $this->end = new Point($end->getX(),$end->getY());
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
        $copiStart = new Point($this->start->getX(), $this->start->getY());
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
        $this->start = new Point($start->getX(), $start->getY());
    }
// question 17
    public function translation()
    {
        
    }
// question 18
// question 19
// question 20
// question 21
}