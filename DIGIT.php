<?php
$n = $_POST['n'];
if ($n >= 0 && $n<=9)
{
echo "SINGLE Digit!";
}
elseif($n>=10 && $n<100){
    echo "DOUBLE Digit!!";
}

elseif($n>=100 && $n<1000){
    echo "TRIPLE Digit!!!";
}
else{
    echo "OTHER";
}

?>