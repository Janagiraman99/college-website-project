
<?php
if (empty($_POST['x'])){
    $x = "x is required!";
}
else{
    $x = $_POST['x'];
}
if (empty($_POST['y'])){
    $y = "y is required!";
}
else{
    $y = $_POST['y'];
}
$perform = $_POST['perform'];
if ($perform =="sum1"){
 $sum1 = $x + $y;
 echo "SUM: ".$sum1."<br>";
}
elseif ($perform =="sub1"){
    $sub1 = $x - $y;
    echo "SUB: ".$sub1."<br>";
}
elseif ($perform =="div1"&& $y > 0 ){
    $div1 = $x / $y;
    echo "DIV: ".$div1."<br>";
   }
elseif ($perform =="mul1" ){
    $mul1 = $x * $y;
    echo "MUL: ".$mul1."<br>";
}
else{
    $div1 = "DIVISION CANNOT BE PERFORMED!";
    echo "DIV: ".$div1."<br>";
}


?>