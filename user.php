<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

if ($n1 >= 0 && $n2 >= 0){
    echo "SUM is ". ($n1 + $n2);
}
else{
    echo "The Values cant be negative!";
}
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

<label>NUMBER_1</label>
<input type="number" name="n1"><br>
<label>NUMBER_2</label>
<input type="number" name="n2"><br>

<button type="submit"> SUM</buuton>

</form>
