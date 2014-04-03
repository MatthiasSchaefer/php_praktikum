<pre>
<?php
include_once 'Aufgaben/01Rechner.php';
include_once 'Aufgaben/02String.php';

$rechner = new \de\hsw\php\Rechner();
$rechner->setA(56);
$rechner->setb(65);
$erg = 1;
echo "rechner->add()  :".($rechner->add()==$erg?"OK!":($rechner->add()." statt $erg gefunden."))."\n";
echo "rechner->sub()  :".($rechner->sub()==$erg?"OK!":($rechner->sub()." statt $erg gefunden."))."\n";
echo "rechner->mul()  :".($rechner->mul()==$erg?"OK!":($rechner->mul()." statt $erg gefunden."))."\n";
echo "rechner->div()  :".($rechner->div()==$erg?"OK!":($rechner->div()." statt $erg gefunden."))."\n";
echo "rechner->div2() :".($rechner->div2()==$erg?"OK!":($rechner->div2()." statt $erg gefunden."))."\n";
echo "rechner->mod()  :".($rechner->mod()==$erg?"OK!":($rechner->mod()." statt $erg gefunden."))."\n";
echo "rechner->sqr()  :".($rechner->sqr()==$erg?"OK!":($rechner->sqr()." statt $erg gefunden."))."\n";
echo "rechner->sqrt() :".($rechner->sqrt()==$erg?"OK!":($rechner->sqrt()." statt $erg gefunden."))."\n";
echo "rechner->und()  :".($rechner->und()==$erg?"OK!":($rechner->und()." statt $erg gefunden."))."\n";
echo "rechner->oder() :".($rechner->oder()==$erg?"OK!":($rechner->oder()." statt $erg gefunden."))."\n";
echo "rechner->xoder():".($rechner->xoder()==$erg?"OK!":($rechner->xoder()." statt $erg gefunden."))."\n";
echo "\n";
$string = new \de\hsw\php\String();
$string->setStrings(['Hallo','Welt','PHP']);
echo "string->concat() :".($string->concat()==$erg?"OK!":($string->concat()." statt $erg gefunden."))."\n";
echo "string->find()   :".($string->find('a')==$erg?"OK!":($string->find('a')." statt $erg gefunden."))."\n";
echo "string->replace():".($string->replace('H','O')==$erg?"OK!":($string->replace('H','O')." statt $erg gefunden."))."\n";
echo "string->reverse():".($string->reverse()==$erg?"OK!":($string->reverse()." statt $erg gefunden."))."\n";
?>
</pre>