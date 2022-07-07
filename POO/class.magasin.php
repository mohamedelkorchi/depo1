<?php

class Magasin
{
        private $_nomMagasin;
        private $_adresseMagasin;
        private $_cpMagasin;
        private $_villeMagasin;


        public function __construct($_nomMagasin, $_adresseMagasin, $_cpMagasin, $_villeMagasin)
    {
        $this->_nomMagasin = $_nomMagasin;
        $this->_adresseMagasin = $_adresseMagasin;
        $this->_cpMagasin = $_cpMagasin;
        $this->_villeMagasin = $_villeMagasin;
    }

        public function magasin()
        {
            var_dump("mon magasin $magasin1");
            var_dump("mon magasin $magasin2");
        }
}
