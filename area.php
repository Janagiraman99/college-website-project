<?php
interface area
{
    public function calculate($r);
}
class circle implements area
{
public function calculate($r){
    $ar = (3.14* $r**2);
    echo "AREA OF CIRCLE" . $ar."</br>";
}
}
class rectangle implements area
{
    public function calculate($r){
    $ar = (2*3.14*$r);
    echo "AREA OF RECTANGLE". $ar;
}
}

$c = new circle();
$r = new rectangle();
$a = $c;
$a->calculate(34);
$a = $r;
$a->calculate(34);

?>