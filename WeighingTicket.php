<?php
// Schneider Arthur
declare(strict_types = 1);

// question 2
class WeighingTicket{
    private string $articleName;
    private float $pricePerKilogram;
    private int $weight;
    private float $price;
    /**
     * constructeur de la classe WeighingTicket, permet d'afecte un nom d'article, un prix
     * au kilo ainsi qu'un poids a un tiket. Lorsque ces caractéritiques ne sont pas renseignées lors de
     * l’appel du contructeur, le tiket auras pour nom d'article "Unknown", pour prix au kilo 0
     * et pour poids 0.
     * 
     * @param string $articleName (optional) nom de l'article
     * @param float $pricePerKilogram (optional) prix au kilo de l'article
     * @param int $weight (optional) poids de l'article
     */
    public function __construct(string $articleName = "Unknown", float $pricePerKilogram = 0, int $weight = 0)
    {
        $this->articleName = $articleName;
        $this->pricePerKilogram = $pricePerKilogram;
        $this->weight = $weight;
        $this->price = 0;
        if($this->weight != 0){
            $this->price = $pricePerKilogram / 1000 * $weight;
        }
    }
// question 4
    /**
     * accesseur au nom de l'article, renvoi le nom de l'article avec une chaine de caractaire
     * @return string nom de l'article
     */
    public function getArticleName(): string
    {
        return $this->articleName;
    }
    /**
     * accesseur au Prix au kilo de l'article, renvoi le prix au kilo de l'aricle avec un réel
     * @return float prix au kilo de l'article
     */
    public function getPricePerKilogram():float
    {
        return $this->pricePerKilogram;
    }
    /**
     * accesser au poids de l'article, renvoi le poids de l'article avec un entier
     * @return int
     */
    public function getWeight():int
    {
        return $this->weight;
    }
    /**
     * accesseur au prix de l'article, renvois le pris de l'article avec un réel
     * @return float pris de l'aricle
     */
    public function getPrice():float
    {
        return $this->price;
    }
    /**
     * modificateurs du nom de l'article, modifie l'article avec le nom passer en parametre
     * @param mixed $articleName nouveux nom
     */
    public function setArticleName($articleName): void
    {
        $this->articleName = $articleName;
    }
    /**
     * modificateur du prix au kilo du produit, modifie le prix au kilo du produit
     * et remet a jour de prix
     * @param mixed $pricePerKilogram nouveau
     */
    public function setPricePerKilogram($pricePerKilogram): void
    {
        $this->pricePerKilogram = $pricePerKilogram;
        $this->updatePrice();
    }
    /**
     * modificateur du poids du produit, modifie le poids du produit et met à jour son prix
     * @param mixed $weight nouveau poids
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
        $this->updatePrice();
    }
    /**
     * methode qui met a jour le prix du produit
     * @return void
     */
    private function updatePrice(): void
    {
        $this->price = $this->pricePerKilogram / 1000 * $this->weight;
    }
    /**
     * deffini un poid aleatoir entre 0 et 5000
     */
    public function weighing () : void
    {
        $pds = rand(0,5000);
        $this->setWeight($pds);
    }
}