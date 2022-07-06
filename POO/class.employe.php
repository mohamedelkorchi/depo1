<?php

class Employe
{
    public $_nom;
    public $_prenom;
    public $_dateEmbauche;
    public $_salaire;
    public $_poste;
    //public $_date;
    public $_duree;

    public function __construct($_prenom, $_nom, $_dateEmbauche, $_salaire, $_poste)
    {
        $_date = new DateTime('now');
        $this->_duree = $_dateEmbauche->diff($_date);
        $this->_prenom = $_prenom;
        $this->_nom = $_nom;
        $this->_dateEmbauche = $_dateEmbauche;
        $this->_salaire = $_salaire;
        $this->_poste = $_poste;
    }

    public  function presentation()
    {
        var_dump("Bonjour je suis $this->_prenom $this->_nom.
        Je suis au service $this->_poste depuis le ".$this->_dateEmbauche->format("d/m/Y")." pour un salaire brut/an de $this->_salaire €.
         ");
         var_dump("embauché le"." ".  $this->_dateEmbauche->format("d/m/Y"));

    }

    public function calculPrime()
    {
        $prime = ($this->_salaire * 5/100) + (($this->_salaire * 2/100) * $this->_duree->format('%y'));
        var_dump("prime de $prime €");
        var_dump("salaire : $this->_salaire €/an");
        
        var_dump("duree ".$this->_duree->format('%y')."ans");
    }

    public function calculDate()
    {
        
         var_dump("ca fait ".$this->_duree->format('%y')." ans que je suis dans l'entreprise. ");
    }

}


