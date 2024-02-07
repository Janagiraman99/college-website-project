
<?php
interface bank {

public function loan($amount);
public function deposit($amount);

}
class b1 implements bank{
    public function loan($amount){
        echo "Interest must be 10% <br>";
        $a = 10/100* $amount;
        $total = $amount +$a;
        echo "Loan Interest Amount". $a."<br>";
        echo "Total Amount to be paid after a month". $total."<br>";
    }
    public function deposit($amount){
        echo "Interest must be 20% <br>";
        $a1 = 20/100*$amount;
        $total = $amount+ $a1;
        echo "Deposit Interest Amount". $a1."<br>";
        echo "Deposited Amount after a month with Interest".$total."<br>";
    }
}
class b2 implements bank{
    public function loan($amount){
        echo "Interest must be 12% <br>";
        $a = 12/100* $amount;
        $total = $amount +$a;
        echo "Loan Interest Amount". $a."<br>";
        echo "Total Amount to be paid after a month".$total."<br>";
    }
    public function deposit($amount){
        echo "Interest must be 18% <br>";
        $a1 = 18/100*$amount;
        $total = $amount- $a;
        echo "Deposit Interest Amount". $a1."<br>";
        echo "Deposited Amount after a month with Interest".$total."<br>";
    }
}
$c = new b1();
$d = new b2();
$e = $c;
$e -> deposit(2500);
$e = $d;
$e -> loan(2500);
?>