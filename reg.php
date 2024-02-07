<html>
<head>
    <title> USER REG FORM</title>
</head>
<body>
<?php
$un=$pw=$rpw=$em="";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $un = check($_POST['un']);
    $pw = check($_POST['pw']);
    $rpw = check($_POST['rpw']);
    $em = check($_POST['em']);

}
function check($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (empty($un)){
    echo"USERNAME:".$un . "USERNAME is required!"."<br><br>";;
}
else{
    echo "USERNAME: ". $un."<br><br>";
}






if ($pw == $rpw){
    echo"PASSWORD: ". $pw."<br><br>";
}
else{
    echo "PASSWORD:"."The Password doesnot match....<br><br>";
}

echo "E-MAIL: ".$em."<br><br>";



?>
<form method = "post" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']);?>">
<label>USERNAME</label>
<input type="text" name='un'><br><br>
<label>PASSWORD</label>
<input type="password" name='pw'><br><br>
<label>RETYPE PASSWORD</label>
<input type="password" name='rpw'><br><br>
<label>email</label>
<input type="text" name='em'><br><br>
<button type="submit">CREATE</button>
</form>
<?php



?>
</body>
</html>