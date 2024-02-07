<?php
 class stock{
    public $id, $name, $quantity, $rackno, $sname;
    function __construct(){
        $this -> sname = "aveon";

    }
    function id($n){
        $this->id = $n;
        echo "STOCK ID:".$n."<br>";
    }
    function name($n){
        $this->name = $n;
        echo "STOCK NAME:".$n."<br>";
    }
    function quantity($n){
        $this-> quantity = $n;
        echo "STOCK QUANTITY:".$n."<br>";
    }
    function rackno($n){
        $this -> rackno = $n;
        echo "RACKNO:".$n."<br>";
    }
 }
$s = new stock();

$s -> id("1234");
$s -> name("Janu");
$s -> quantity(30);
$s -> rackno(7);
?>