<?php

class Employe
{
    public $_nom;
    public $_prenom;
    public $_age;

    public function __construct($_prenom, $_nom, $_age)
    {
        $this->_prenom = $_prenom;
        $this->_nom = $_nom;
        $this->_age = $_age;
    }

    public  function presentation()
    {
        var_dump("Bonjour je suis $this->_prenom $this->_nom et j'ai $this->_age ans ");
    }
}

$employe1 = new Employe('elkorchi', 'mohamed', 28);

$employe2 = new Employe('moh', 'elk', 20);

$employe1->presentation();
$employe2->presentation();




