<?php
/**
 * Created by PhpStorm.
 * User: mielke
 * Date: 03.04.14
 * Time: 16:26
 */

namespace de\hsw\php;


class String {
    private $strings = [];

    public function setStrings($strings){
        $this->strings = $strings;
    }

    public function getStrings(){
        return $this->strings;
    }

    public function concat(){
        //Alle Strings im Array $strings zu einer Zeichenkette zusammenfügen. (http://de3.php.net/implode)

    }
    public function find($f){
        //Gibt ein Array zuruck das nur noch strings enthält die den String $f enthalten.

    }
    public function replace($old, $new){
        //Ersetze jedes $old in jedem String in $strings.

    }
    public function reverse(){
        //Drehe jede Zeichenkette um.

    }
    public function sort($asc){
        //sortiere die einträge im Array (asc = 1 aufsteigend, asc = 0 absteigend)

    }
}