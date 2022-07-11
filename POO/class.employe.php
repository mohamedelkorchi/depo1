<?php
include "class.magasin.php";

class Employe
{
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_salaire;
    private $_poste;
    //public $_date;
    private $_duree;
    private $_magasin;

    public function __construct($_prenom, $_nom, $_dateEmbauche, $_salaire, $_poste, $magasin = Null)
    {
        $_date = new DateTime('now');
        $this->_duree = $_dateEmbauche->diff($_date);
        $this->_prenom = $_prenom;
        $this->_nom = $_nom;
        $this->_dateEmbauche = $_dateEmbauche;
        $this->_salaire = $_salaire;
        $this->_poste = $_poste;
        $this->_magasin = $magasin;
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

    /**
     * Get the value of _nom
     */ 
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */ 
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _prenom
     */ 
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     *
     * @return  self
     */ 
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    /**
     * Get the value of _dateEmbauche
     */ 
    public function get_dateEmbauche()
    {
        return $this->_dateEmbauche;
    }

    /**
     * Set the value of _dateEmbauche
     *
     * @return  self
     */ 
    public function set_dateEmbauche($_dateEmbauche)
    {
        $this->_dateEmbauche = $_dateEmbauche;

        return $this;
    }

    /**
     * Get the value of _salaire
     */ 
    public function get_salaire()
    {
        return $this->_salaire;
    }

    /**
     * Set the value of _salaire
     *
     * @return  self
     */ 
    public function set_salaire($_salaire)
    {
        $this->_salaire = $_salaire;

        return $this;
    }

    /**
     * Get the value of _poste
     */ 
    public function get_poste()
    {
        return $this->_poste;
    }

    /**
     * Set the value of _poste
     *
     * @return  self
     */ 
    public function set_poste($_poste)
    {
        $this->_poste = $_poste;

        return $this;
    }

    /**
     * Get the value of _duree
     */ 
    public function get_duree()
    {
        return $this->_duree;
    }

    /**
     * Set the value of _duree
     *
     * @return  self
     */ 
    public function set_duree($_duree)
    {
        $this->_duree = $_duree;

        return $this;
    }

    /**
     * Get the value of _magasin
     */ 
    public function get_magasin()
    {
        return $this->_magasin;
    }

    /**
     * Set the value of _magasin
     *
     * @return  self
     */ 
    public function set_magasin($_magasin)
    {
        $this->_magasin = $_magasin;

        return $this;
    }
}


