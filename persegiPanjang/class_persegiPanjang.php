<?php
      class persegi_panjang
      { // buka class
            private $panjang;
            private $lebar;

            function __construct($p, $l){
                  $this->panjang = $p;
                  $this->lebar = $l;
            }

            function getPanjang($panjang){
                  return $this->panjang = $panjang;
            }

            function getLebar($lebar){
                  return $this->lebar = $lebar;
            }

            function getLuas(){
            return $this->panjang * $this->lebar;
            }

            function getKeliling(){
                  return 2 * ($this->panjang + $this->lebar);
            }
      } // tutup class
?>