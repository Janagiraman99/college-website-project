<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$DATABASE_NAME = 'loginform';
$con = mysqli_connect($servername, $username, $password, $DATABASE_NAME);
if ( mysqli_connect_error() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


if ( !isset($_POST['un'], $_POST['pw']) ) {
	exit('Please fill both the username and password fields!');
}


if ($stmt = $con->prepare('SELECT USERNAME, PASSWORD FROM login WHERE USERNAME ='$stmt->bind_param('s', $_POST['un'])'  and PASSWORD = '$stmt->bind_param('s', $_POST['pw'])'')) {
	USERNAME = ;
    PASSWORD = ;
	$stmt->execute();
	$stmt->store_result();

}
$stmt->store_result();
if ($stmt->num_rows > 0) {
	$stmt->bind_result($username, $password);
	$stmt->fetch();
	if (password_verify($_POST['pw'], $password)) {

		$_SESSION['submit'] = TRUE;
		echo 'Welcome ' . $_POST['un'] . '!';
	}
    else {

		echo 'Incorrect username and/or password!';
	}
}
else {

	echo 'Incorrect Username and/or Password!';
}

?>