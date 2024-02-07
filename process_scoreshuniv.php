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
foreach ($_POST['huniv'] as $id => $huniv) {

    $query = "UPDATE html SET htmluniv = $huniv WHERE id = $id";
    $query1 = "UPDATE univ SET htmluniv = $huniv WHERE id = $id";

    mysqli_query($conn, $query1);

    mysqli_query($conn, $query);
}

// Close the connection
mysqli_close($conn);

// Redirect back to the form
header("Location: htmluniv.php");
exit();
?>
