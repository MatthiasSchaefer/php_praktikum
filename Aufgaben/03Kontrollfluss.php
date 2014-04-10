<?php
/**
 * Created by PhpStorm.
 * User: mielke
 * Date: 04.04.14
 * Time: 10:10
 */

namespace de\hsw\php;


class Kontrollfluss {

    private $a = 0,$b = 0;

    public function  getA(){
        return $this->a;
    }
    public function  setA($a){
        $this->a = $a;
    }
    public function  getB(){
        return $this->b;
    }
    public function  setB($b){
        $this->b = $b;
    }

    public function equal(){
        //Wenn a grÃ¶ÃŸer als b gib 1 zurÃ¼ck
        //Wenn a = b gib 0 zurÃ¼ck
        //sonst -1
    }

    public function liste(){
        // Gib ein Array zurÃ¼ck das $a zahlen enthÃ¤lt, beginnend mit 1. [1,2,3,4,...,$a]
    }

/**
     * Berechnet die Fakultät
     * @return Fakultät von a, false falls a keine Zahl
     */
    public function fak()
    {
        if (!is_numeric($this->a))
        {
            return false;
        }
        return $this->fak_rek($this->a);
    }
    
    /**
     * rekursives Berechnen der Fakultät
     * 
     * @param $i Zahl zu der die Fakulktät berechnet werden soll
     * @param string $erg Zwischenergebnis (wird automatisch benutzt)
     * @return Fakultät von $i
     */
    private function fak_rek($i, $erg = NULL)
    {
        // berechne rekursiv die fakultÃ¤t von $a
        if ($i == 1)
        {
            return $erg == NULL ? 1 : $erg;
        }
        $erg = $erg == NULL ? $i-- : $erg * $i--;
        return $this->fak_rek($i, $erg);
    }

} 