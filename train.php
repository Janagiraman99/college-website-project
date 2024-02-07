<?php
class train{
    public $TrainID, $TrainName, $From, $to, $Coach, $Citizen;
    function det($TrainID, $TrainName, $From, $to, $Coach, $Citizen){
        echo "TRAIN ID: ".$this->TrainID = $TrainID."<BR>";
        echo "TRAIN NAME: ".$this->TrainName = $TrainName."<BR>";
        echo "BOARDING: ".$this->From = $From."<BR>";
        echo "DEPARTURE: ".$this->to = $to."<BR>";
        echo "COACH TYPE: ".$this->Coach = $Coach."<BR>";
        echo "SENIOR CITIZEN: ".$this->Citizen = $Citizen ."<br>";
    }
}
class fare extends train {
    function work($TrainID, $TrainName, $From, $to, $Coach, $Citizen){

    if ($Coach == "3AC" && $From == "cbe" && $to == "central" && $Citizen == "no"){
        $f = 750;
        echo "Fare Amount must be 750<br>";
    }
    else if ($Coach == "3AC" && $From == "central" && $to == "madurai" && $Citizen == "no"){
        $f = 1000;
        echo "Fare Amount must be 1000<br>";
    }
    else if ($Coach == "2AC" && $From == "cbe" && $to == "central" && $Citizen == "no"){
        $f = 1000;
        echo "Fare Amount must be 1000<br>";
    }
    else if ($Coach == "2AC" && $From == "central" && $to == "madurai" && $Citizen == "no"){
        $f = 1250;
        echo "Fare Amount must be 1250<br>";
    }
    else if ($Coach == "3AC" && $From == "cbe" && $to == "central" && $Citizen == "yes"){
        $f = 750 - 750*10/100;
        echo "Fare Amount must be ".$f."<br>";
    }
    else if ($Coach == "3AC" && $From == "central" && $to == "madurai" && $Citizen == "yes"){
        $f = 1000 - 1000*10/100;
        echo "Fare Amount must be ".$f."<br>";
    }
    else if ($Coach == "2AC" && $From == "cbe" && $to == "central" && $Citizen == "yes"){
        $f = 1000 - 1000*10/100;
        echo "Fare Amount must be ".$f."<br>";
    }
    else if ($Coach == "2AC" && $From == "central" && $to == "madurai" && $Citizen == "yes"){
        $f = 1250 - 1250*10/100;
        echo "Fare Amount must be ".$f."<br>";
    }
    else{
        echo "Something Went Wrong!<br>";
    }
}

}

$a = new fare();
$a-> det(12345,"shatabdi express","central","madurai","3AC","yes");
$a-> work(12345,"shatabdi express","central","madurai","3AC","yes");

?>