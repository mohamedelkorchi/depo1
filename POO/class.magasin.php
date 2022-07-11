<?php

class Magasin
{
        private $_nomMagasin;
        private $_adresseMagasin;
        private $_cpMagasin;
        private $_villeMagasin;
        private $_employes = [];


        public function __construct($_nomMagasin, $_adresseMagasin, $_cpMagasin, $_villeMagasin)
    {
        $this->_nomMagasin = $_nomMagasin;
        $this->_adresseMagasin = $_adresseMagasin;
        $this->_cpMagasin = $_cpMagasin;
        $this->_villeMagasin = $_villeMagasin;
    }

        public function magasin()
        {
            var_dump("mon 1er magasin  $this->_nomMagasin");
            //var_dump("mon magasin $magasin2");
        }

        /**
         * Get the value of _employes
         */ 
        public function get_employes()
        {
                return $this->_employes;
        }

        /**
         * Set the value of _employes
         *
         * @return  self
         */ 
        public function set_employes($_employes)
        {
                array_push($this->_employes, $_employes);

                return $this;
        }
}
