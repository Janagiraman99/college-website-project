<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password="";
$databasename = "csdept";
$conn = mysqli_connect($servername, $username, $password,$databasename);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Loop through the posted data and update scores
foreach ($_POST['cssu4'] as $id => $cssu4) {

    $query = "UPDATE css SET cssu4 = $cssu4 WHERE id = $id";
    $query1 = "UPDATE unit4 SET cssu4 = $cssu4 WHERE id = $id";

    mysqli_query($conn, $query1);
    mysqli_query($conn, $query);
}

// Close the connection
mysqli_close($conn);

// Redirect back to the form
header("Location: cssu4.php");
exit();
?>
