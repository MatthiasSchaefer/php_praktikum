<pre>
<?php
include_once 'Aufgaben/01Rechner.php';
include_once 'Aufgaben/02String.php';
include_once 'Aufgaben/03Kontrollfluss.php';

$rechner = new \de\hsw\php\Rechner();
$rechner->setA(56);
$rechner->setB(65); 
$erg = 121;
echo "rechner->add()  :".($rechner->add()==$erg?"OK!":($rechner->add()." statt $erg gefunden."))."\n";
$erg = -9;
echo "rechner->sub()  :".($rechner->sub()==$erg?"OK!":($rechner->sub()." statt $erg gefunden."))."\n";
$erg = 3640;
echo "rechner->mul()  :".($rechner->mul()==$erg?"OK!":($rechner->mul()." statt $erg gefunden."))."\n";
$erg = 56;
echo "rechner->mod()  :".($rechner->mod()==$erg?"OK!":($rechner->mod()." statt $erg gefunden."))."\n";
$erg = 3136;
echo "rechner->sqr()  :".($rechner->sqr()==$erg?"OK!":($rechner->sqr()." statt $erg gefunden."))."\n";
$rechner->setb(16);
$erg = 3.5;
echo "rechner->div()  :".($rechner->div()==$erg?"OK!":($rechner->div()." statt $erg gefunden."))."\n";
$erg = 3;
echo "rechner->div2() :".($rechner->div2()==$erg?"OK!":($rechner->div2()." statt $erg gefunden."))."\n";
$rechner->setA(64);
$erg = 8;
echo "rechner->sqrt() :".($rechner->sqrt()==$erg?"OK!":($rechner->sqrt()." statt $erg gefunden."))."\n";
$rechner->setb(65);
$erg = 64;
echo "rechner->und()  :".($rechner->und()==$erg?"OK!":($rechner->und()." statt $erg gefunden."))."\n";
$erg = 65;
echo "rechner->oder() :".($rechner->oder()==$erg?"OK!":($rechner->oder()." statt $erg gefunden."))."\n";
$erg = 1;
echo "rechner->xoder():".($rechner->xoder()==$erg?"OK!":($rechner->xoder()." statt $erg gefunden."))."\n";
echo "\n";

$string = new \de\hsw\php\String();
$string->setStrings(['Hallo','PHP','!']);
$erg = 'HalloPHP!';
echo "string->concat() :".($string->concat()==$erg?"OK!":($string->concat()." statt $erg gefunden."))."\n";
$erg = json_decode('["Hallo"]');
echo "string->find()   :".($string->find('a')==$erg?"OK!":(json_encode($string->find('a'))." statt $erg gefunden."))."\n";
$erg = json_decode('["Oallo","POP","!"]');
echo "string->replace():".($string->replace('H','O')==$erg?"OK!":json_encode($string->replace('H','O'))." statt $erg gefunden.")."\n";
$erg = json_decode('["ollaH","PHP","!"]');
echo "string->reverse():".($string->reverse()==$erg?"OK!":(json_encode($string->reverse())." statt $erg gefunden."))."\n";
echo "\n";

$kontrollfluss = new \de\hsw\php\Kontrollfluss();
$erg = [[3,5,-1],[5,3,1],[5,5,0]];
echo 'kontrollfluss->equal() :';
foreach($erg as $e)
{ 
    $kontrollfluss->setA($e[0]);
    $kontrollfluss->setB($e[1]);
    if($kontrollfluss->equal()===$e[2])echo 'OK! ';
    else echo $kontrollfluss->equal().' gefunden '.$e[2].' erwartet! ';
}
echo "\n";

$erg = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
$kontrollfluss->setA(20);
echo 'kontrollfluss->liste() :'.($kontrollfluss->liste()==$erg?"OK!":(json_encode($kontrollfluss->liste())." statt ".json_encode($erg)." gefunden."))."\n";

$kontrollfluss->setA(10);
$erg = 3628800;
echo 'kontrollfluss->fak()   :'.($kontrollfluss->fak()==$erg?"OK!":$kontrollfluss->fak()." statt $erg gefunden.")."\n";
?>
</pre>