<?php

/**
 * Created by PhpStorm.
 * User: mielke
 * Date: 04.04.14
 * Time: 10:10
 */
namespace de\hsw\php;

class Kontrollfluss
{
    private $a = 0, $b = 0;
    public function getA()
    {
        return $this->a;
    }
    public function setA($a)
    {
        $this->a = $a;
    }
    public function getB()
    {
        return $this->b;
    }
    public function setB($b)
    {
        $this->b = $b;
    }
    public function equal()
    {
        // Wenn a größer als b gib 1 zurück
        // Wenn a = b gib 0 zurück
        // sonst -1
        if ($this->a > $this->b)
        {
            return 1;
        }
        if ($this->a == $this->b)
        {
            return 0;
        }
        return - 1;
    }
    public function liste()
    {
        // Gib ein Array zurück das $a zahlen enthält, beginnend mit 1. [1,2,3,4,...,$a]
        $temp = array();
        for($i = 1; $i <= $this->a; $i ++)
        {
            $temp[] = $i;
        }
        return $temp;
    }
    
    /**
     * Berechnet die Fakult�t
     * @return Fakult�t von a, false falls a keine Zahl
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
     * rekursives Berechnen der Fakult�t
     * 
     * @param $i Zahl zu der die Fakulkt�t berechnet werden soll
     * @param string $erg Zwischenergebnis (wird automatisch benutzt)
     * @return Fakult�t von $i
     */
    private function fak_rek($i, $erg = NULL)
    {
        // berechne rekursiv die fakultät von $a
        if ($i == 1)
        {
            return $erg;
        }
        $erg = $erg == NULL ? $i-- : $erg * $i--;
        return $this->fak_rek($i, $erg);
    }
} 