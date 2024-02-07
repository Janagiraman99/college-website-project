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
foreach ($_POST['u1'] as $id => $u1) {

    $query = "UPDATE studentmarks SET pythonu1 = $u1 WHERE id = $id";
    $query1 = "UPDATE unit1 SET pythonu1 = $u1 WHERE id = $id";

    mysqli_query($conn, $query);
    mysqli_query($conn, $query1);
}

// Close the connection
mysqli_close($conn);

// Redirect back to the form
header("Location: unittest.php");
exit();
?>
