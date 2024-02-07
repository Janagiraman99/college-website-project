<?php
$id = $_POST['id'];
$person = $_POST['person'];
$amt = $_POST['amt'];
$payment = $_POST['payment'];
if ($id != 0){
echo  "SALES ID:". $id ."<br>";
}
else{
    echo "SALES ID:"."The value cant be zero"."<br>";
}

if ($amt != 0){
echo "SALES AMOUNT:". $amt ."<br>";
}
else{
    echo "SALES AMOUNT:"."The value cant be zero"."<br>";
}
echo "PAYMENT:". $payment."<br>";


if ($person == "Employee1"){
    $inc=$amt*1/100;
    echo "Name:". "Raja<br>";
    echo "Incentive:"."1%<br>";
    echo "Incentive amount:".$inc."<br>";
}
elseif ($person == "Employee2"){
    echo "Name:". "Siva<br>";
    echo "Incentive:"."2%<br>";
    echo "Incentive amount:".($amt*2/100)."<br>";
}
elseif ($person == "Employee3"){
    echo "Name:". "Kumar<br>";
    echo "Incentive:"."3%<br>";
    echo "Incentive amount:".($amt*3/100)."<br>";
}
else {
    echo "Name:". "Others<br>";
    echo "Incentive:"."0.5%<br>";
    echo "Incentive amount:".($amt*0.5/100)."<br>";
}


if ($amt < 5000){
    echo "VAT:". "3%<br>";
    echo "VAT Amount:".($amt*3/100)."<br>";
}
elseif ($amt < 7000){
    echo "VAT:". "4%<br>";
    echo "VAT Amount:".($amt*4/100)."<br>";
}
elseif ($amt < 10000){
    echo "VAT:". "5%<br>";
    echo "VAT Amount:".($amt*5/100)."<br>";
}
elseif ($amt < 15000){
    echo "VAT:". "7%<br>";
    echo "VAT Amount:".($amt*7/100)."<br>";
}
else{
    echo "VAT:". "9%<br>";
    echo "VAT Amount:".($amt*9/100)."<br>";
}

if($payment == "Cash"){
    echo "Charges:". "NIL<br>";
    echo "Charges Amount:"."NIL"."<br>";
}
elseif ($payment == "Creditcard"){
    echo "Charges:". "1%<br>";
    echo "Charges Amount:".($amt*1/100)."<br>";
}
elseif($payment == "Debitcard"){
    echo "Charges:". "2%<br>";
    echo "Charges Amount:".($amt*2/100)."<br>";
}
else{
    echo "Charges:"."0.5%<br>";
    echo "Charges Amount:".($amt*0.5/100)."<br>";
}


?>
