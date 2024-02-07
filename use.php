<?php
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$m3 = $_POST['m3'];
$m4 = $_POST['m4'];
$m5 = $_POST['m5'];
$total = $m1 + $m2 +$m3 +$m4 + $m5;
$avg = $total/5;
echo "TOTAL SCORE:". $total."<BR>";
echo "AVERAGE:". $avg."<BR>";

?>
<html>
<head>
    <title>USER REG FORM</title>
</head>
<body>
    <form name="ff" method="POST" action="<?PHP echo $_SERVER['PHP_SELF'];?>">
    REG NO = <input type="text" name="rno"><br><br>
    NAME = <input type="text" name="name"><br><br>
    MARK 1 = <input type="text" name="m1"><br><br>
    MARK 2 = <input type="text" name="m2"><br><br>
    MARK 3 = <input type="text" name="m3"><br><br>
    MARK 4 = <input type="text" name="m4"><br><br>
    MARK 5 = <input type="text" name="m5"><br><br>
    <button type="submit">FIND</button><br><br>
    </form>
</body>
</html>