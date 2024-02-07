<?php
session_start();
$servername = "localhost";
$username = "root";
$password="";
$databasename = "csdept";
$conn = mysqli_connect($servername, $username, $password,$databasename);
if($conn -> connect_error){
    die("CONNECTION FAILED!". $conn-> connect_error);

}
// Example password hashing
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
// Set session variables upon successful login
$_SESSION['user_id'] = $user_id; // Retrieve the user ID from the database
$_SESSION['full_name'] = $full_name;

// Check if the user is logged in on protected pages
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if not logged in
    header("Location: slogin.php");
    exit();
}


// Check if the user is logged in, otherwise redirect to the login page
// Fetch and display the student's marks based on the logged-in user
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['full_name']; ?>!</h2>
    <!-- Display the student's marks here -->
</body>
</html>
