<?php

/**
 * Created by PhpStorm.
 * User: mielke
 * Date: 03.04.14
 * Time: 16:14
 */
namespace de\hsw\php;

class Rechner
{
    private $a = 0, $b = 0;//Zahlen
    /**
     * gibt a zur�ck
     * @return number
     */
    public function getA()
    {
        return $this->a;
    }
    
    /**
     * setzt a um
     * @param unknown $a
     */
    public function setA($a)
    {
        $this->a = $a;
    }
    
    /**
     * gibt B zur�ck
     * @return number
     */
    public function getB()
    {
        return $this->b;
    }
    
    /**
     * setzt B neu
     * @param neuer Wert $b
     */
    public function setB($b)
    {
        $this->b = $b;
    }
    /**
     * gibt die Summe von A und B zur�ck
     */
    public function add()
    {
        return $this->a + $this->b;
    }
    
    /**
     * gibt die Differenz zur�ck
     */
    public function sub()
    {
        return $this->a - $this->b;
    }
    
    /**
     * gibt das Produkt von A und B zur�ck
     */
    public function mul()
    {
        return $this->a * $this->b;
    }
    
    /**
     * 
     * Dividiert a und b und gibt das Ergebnis zur�ck
     */
    public function div()
    {
        return $this->a / $this->b;
    }
    
    /**
     * Ganzzahldivision von a und b
     */
    public function div2()
    {
        return floor($this->a / $this->b);
    }
    
    /**
     * gibt den Modulus zur�ck
     */
    public function mod()
    {
        return $this->a % $this->b;
    }
    
    /**
     * gibt das Quadrat von a zur�ck
     */
    public function sqr()
    {
        return pow($this->a, 2);
    }
    
    /**
     * @return Wurzel von a
     */
    public function sqrt()
    {
        return sqrt($this->a);
    }
    
    /**
     * @return bin�re AND Verkn�pfung von a und b
     */
    public function und()
    {
        return $this->a & $this->b;
    }
    
    /**
     * @return bin�re OR Verkn�pfung von a und b
     */
    public function oder()
    {
        return $this->a | $this->b;
    }
    
    /**
     * @return bin�re XOR Verkn�pfung von a und b
     */
    public function xoder()
    {
        return $this->a ^ $this->b;
    }
} 