<?php
$un = $_POST['USERNAME'];
$pw = $_POST{'PASSWORD'};
echo "Welcome ".$un."<br>";

?>
<html>
<head>
</head>
<body>
<form action="un1.php" method="POST">
<label>ITEM CODE</label>
<SELECT name="a">
            <option value=" " > </option>
            <option value="1" >1</option>
            <option value="2" >2</option>
            <option value="3" >3</option>
            <option value="4" >4</option>
   </SELECT><br><BR>
<label>ITEM NAME</label>
    <SELECT name="b">
            <option value=" " > </option>
            <option value="lux" >Lux</option>
            <option value="hamam" >Hamam</option>
            <option value="dove" >Dove</option>
            <option value="johns" >Johns</option>
   </SELECT><br><br>
<label>COST</label>
<input type="text" id="co"><br><br>
<label>QUANTITY</label>
<SELECT id="c">
            <option value=" " > </option>
            <option value="q" >1</option>
            <option value="q1" >2</option>
            <option value="q2" >3</option>
            <option value="q3" >10</option>
   </SELECT><br><br>
   <p id="demo2"></p>
<button type="submit" onclick="myfun()"> SUBMIT</button>
</form>
<script>
    function myfun(){
        let x  = document.getelementbyid("co").innerhtml.value ;
        let y = document.getelementbyid("c").innerhtml.value ;
        document.getelementbyid("demo2").innerhtml = x * y ;
    }
</script>
</body>

</html>