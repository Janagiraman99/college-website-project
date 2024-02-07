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
foreach ($_POST['jsu5'] as $id => $jsu5) {

    $query = "UPDATE js SET jsu5 = $jsu5 WHERE id = $id";
    $query1 = "UPDATE unit5 SET jsu5 = $jsu5 WHERE id = $id";

    mysqli_query($conn, $query1);
    mysqli_query($conn, $query);
}

// Close the connection
mysqli_close($conn);

// Redirect back to the form
header("Location: jsu5.php");
exit();
?>
