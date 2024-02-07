<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "csdept";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to insert a new student record
function addStudent($name, $grade) {
    global $conn;
    $sql = "UPDATE student set u1 = $grade";
    $conn->query($sql);
}

// Function to retrieve all students
function getAllStudents() {
    global $conn;
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Close the connection
$conn->close();
?>
