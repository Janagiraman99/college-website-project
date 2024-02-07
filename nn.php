<?php
if (empty($_POST['n1'])){
    $n1 = "N1 is required!";
}
else{
    $n1 = $_POST['n1'];
}
if (empty($_POST['n2'])){
    $n1 = "N2 is required!";
}
else{
    $n2 = $_POST['n2'];
}

$action = $_POST['action'];
if ($action =="sum"){
 $sum = $n1 + $n2;
 echo "SUM: ".$sum."<br>";
}
elseif ($action =="sub"){
    $sub = $n1 - $n2;
    echo "SUB: ".$sub."<br>";
}
elseif ($action =="div"&& $n2>0 ){
    $div = $n1 / $n2;
    echo "DIV: ".$div."<br>";
   }
elseif ($action =="mul" ){
    $mul = $n1 * $n2;
    echo "MUL: ".$mul."<br>";
}
else{
    $div = "DIVISION CANNOT BE PERFORMED!";
    echo "DIV: ".$div."<br>";
}

?>

<html>
<head></head>
<body>
<form action="nn1.php" method="POST">
   x = <input type="text" name="x" ><br>
   y = <input type="text" name="y" ><br>
   PERFORM: <SELECT name="perform">
            <option value="sum1" >sum1</option>
            <option value="sub1" >sub1</option>
            <option value="div1" >div1</option>
            <option value="mul1" >mul1</option>
   </SELECT> <br>
   <button type="submit">SUBMIT</button>
</form>


</body>
</html>

