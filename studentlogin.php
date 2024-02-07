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


if ( !isset($_POST['un'], $_POST['pw']) ) {
	exit('Please fill both the username and password fields!');
}
$u=$_POST['un'];
$p=$_POST['pw'];
$sql="SELECT username,password FROM student  where username = '$u' and password ='$p' ";
//echo $sql;
if ($result = $mysqli -> query($sql)) {
    while ($row = $result -> fetch_row()) {
      //printf ("%s (%s)\n", $row[0], $row[1]);
      if ($u == 'Preetha'){
      $_SESSION['Submit'] = TRUE;
      echo 'Welcome ' . $_POST['un'] . '!';
      header('Location: student.html');
    }
    if ($u == 'Krish'){
      $_SESSION['Submit'] = TRUE;
      echo 'Welcome ' . $_POST['un'] . '!';
      header('Location: student1.html');
    }
    if ($u == 'Keerthana'){
      $_SESSION['Submit'] = TRUE;
      echo 'Welcome ' . $_POST['un'] . '!';
      header('Location: student2.html');
    }
    if ($u == 'Anish'){
      $_SESSION['Submit'] = TRUE;
      echo 'Welcome ' . $_POST['un'] . '!';
      header('Location: student3.html');
    }
    if ($u == 'Pragya'){
      $_SESSION['Submit'] = TRUE;
      echo 'Welcome ' . $_POST['un'] . '!';
      header('Location: student4.html');
    }
    if ($u == 'Bharathi'){
      $_SESSION['Submit'] = TRUE;
      echo 'Welcome ' . $_POST['un'] . '!';
      header('Location: student5.html');
    }}
    $result -> free_result();
  }

?>