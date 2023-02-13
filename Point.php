<?php
// Schneider Arthur
declare(strict_types = 1);
// question 7
class Point{
    private float $x;
    private float $y;
// question 8
    /**
     * Le constructeur de la classe Point. Il définit les attribut d'instance a ceux donner en parametre ou initialiste
     * ci il n'est pas donner la valeur de x a 0 et la valeur de y a 2
     * @param float $x coordonnée en x
     * @param float $y coordonnée en y
     */
    public  function __construct(float $x = 0, float $y =0)
    {
        $this->x = $x;
        $this->y = $y;
    }
// question 9
    /**
     * accesseur de x, revoi la valeur de x
     * @return float valeur de x
     */
    public function getX(): float
    {
        return $this->x;
    }
    /**
     * accesseur de y, revoi la valeur de y
     * @return float valeur de y
     */
    public function getY(): float
    {
        return $this->y;
    }
// Question 10
    /**
     * convertir l'instance de point en chine de charactaire quand elle est appeler en ten que-tel.
     * @return string chainde de charactaire a afficher
     */
    public function __toString():string
    {
        return "( $this->x , $this->y )";
    }
// Question 11
    /**
     * translation deplace le point des valeurs passer en parametre
     * @param float $dx valeur de deplacement de x
     * @param float $dy valeur de deplacement de y
     * @return void
     */
    public function translation(float $dx, float $dy) : void
    {
        $this->x += $dx;
        $this->y += $dy;
    }
}