<?php

/**
 * Created by PhpStorm.
 * User: mielke
 * Date: 03.04.14
 * Time: 16:26
 */
namespace de\hsw\php;

class String
{
    private $strings = [ ]; // array
    public function setStrings($strings)
    {
        $this->strings = $strings;
    }
    public function getStrings()
    {
        return $this->strings;
    }
    
    /**
     *
     * @return Gibt das Array als zusammengefügte Zeichenkette zurück
     */
    public function concat()
    {
        return implode($this->strings);
    }
    
    /**
     * 
     * @param zu suchender String $f
     * @return gibt ein Array mit den Treffern zurück
     */
    public function find($f)
    {
        $temp = array();
        foreach($this->strings as $s)
        {
            if (strpos($s, $f) !== false)
            {
                $temp[] = $s;
            }
        }
        return $temp;
    }

     /** 
     * Ersetze jedes $old in jedem String in $this->strings.
     * @param unknown $old
     * @param unknown $new
     */
    public function replace($old, $new)
    {
        return str_replace($old, $new, $this->strings);
    }
    
    /**
     * Dreht jedes Zeichen um und gibt das selbe Array zurück
     */
    public function reverse()
    {
        for ($i = 0; $i < count($this->strings); $i++)
        {
            $this->strings[$i] = strrev($this->strings[$i]);
        }
        return $this->strings;
    }
    /**
     * sortiere die einträge im Array
     * @param $asc Sortierreihenfolge (asc = 1 aufsteigend, asc = 0 absteigend)
     */
    public function sort($asc)
    {
        switch ($asc)
        {
            default:
        	case 1:
        	    sort($this->strings);
        	case 0:
        	    arsort($this->strings);
        }
    }
}