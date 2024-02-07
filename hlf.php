<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$DATABASE_NAME = 'csdept';
$mysqli = mysqli_connect($servername, $username, $password, $DATABASE_NAME);

if ( mysqli_connect_error() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (empty($_POST['un']) || empty($_POST['pw'])){
  echo"Please Fill both the fields";
}




if ( !isset($_POST['un'], $_POST['pw']) ) {
	exit('Please fill both the username and password fields!');
}
$u=$_POST['un'];
$p=$_POST['pw'];
$sql="SELECT username,password FROM dept  where username = '$u' and password ='$p' ";
//echo $sql;
if ($result = $mysqli -> query($sql)) {
    while ($row = $result -> fetch_row()) {
      //printf ("%s (%s)\n", $row[0], $row[1]);
      $_SESSION['Submit'] = TRUE;
      echo 'Welcome ' . $_POST['un'] . '!';
      header('Location: h.html');
    }
    $result -> free_result();
  }

?>