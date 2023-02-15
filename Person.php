<?php
// Schneider Arthur
declare(strict_types = 1);

class Person
{
    private string $lastName;
    private string $firstName;
    private int $age;

    /**
     * Constructeur de la classe Person. Ce constructeur permet d’affecter un nom, un prénom
    * et un age à une personne. Lorsque ces caractéritiques ne sont pas renseignées lors de
    * l’appel du contructeur, la personne aura pour nom "Doe", prénom "John" et age 0.
    * @param string $lastName (optional) Nom de la personne
    * @param string $firstName (optional) Pr ́enom de la personne
    * @param int $age (optional) Age de la personne
    */
    public function __construct(string $lastName = "Doe", string $firstName = "John", int $age = 0)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->age = $age;
    }

    /**
     * affiche les elt de l'objet
     * @return void
     */
    public function print() : void
    {   
        echo "Nom : {$this->lastName}\n";
        echo "Prenom : {$this->firstName}\n";
        echo "Age : {$this->age}\n" ;
    }

    /**
    * Accesseur au nom de la personne. Retourne la valeur du nom sous forme de chaîne de
    * caractéres.
    *
    * @return string Nom de la personne
    */
    public function getLastName() : string
    {
        return $this->lastName;
    }

    /**
     * Accesseur au prénom de la personne. Retourne la valeur du prénom sous forme de chaîne de
     * caractéres.
     * @return string prénom de la personne
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }

    /**
     * Accesseur a l'age de la personne. Retourne la valeur de l'age sous forme d'un entier.
     * @return int age de la personne
     */
    public function getAge() : int
    {
        return $this->age;
    }

    /**
     * modificateur de l'age de la perssone. Ne retourne rien, modifie la valeur age de la personne.
     * @param int $age age de la personne après modification
     * @return void
     */
    public function setAge(int $age) : void
    {
        $this->age = $age;
    }

    /**
     * modificateur du prenom de la personne. Ne retourne rien, modifie la valeur du prenom
     * de la personne
     * @param string $firstName prenom de la perssone après modification
     * @return void
     */
    public function setFirstName(string $firstName) : void
    {
        $this->firstName = $firstName;
    }

    /**
     * modificateur du nom de la personne. Ne retourn rien, modifie la valeur du le nom 
     * de la personne
     * @param string $lastName nom de la personne après modification
     * @return void
     */
    public function setLastName(string $lastName) : void
    {
        $this->lastName = $lastName;
    }

    /**
     * donne la facon d'interpreter une personne en type string.
     * @return string le information dans le format pour pouvoir les interpreter en string
     */
    public function __toString() : string
    {
        $res = "Nom : {$this->lastName}\n";
        $res = $res."Prenom : {$this->firstName}\n";
        $res = $res."Age : {$this->age}" ;
        return $res;
    }
}