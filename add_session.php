<?php
$servername = "localhost";
$username = "root";
$password="";
$databasename = "csdept";
$conn = mysqli_connect($servername, $username, $password,$databasename);
if($conn -> connect_error){
    die("CONNECTION FAILED!". $conn-> connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject_id = $_POST["subject_id"];
    $faculty_id = $_POST["faculty_id"];
    $day = $_POST["day"];
    $start_time = $_POST["start_time"];
    $end_time = $_POST["end_time"];

    $sql = "INSERT INTO sessions (subjectcode, id, day, start_time, end_time) 
            VALUES ('$subject_id', '$faculty_id', '$day', '$start_time', '$end_time')";

    if ($conn->query($sql) === TRUE) {
        header("Location: viewlesson.php"); // Redirect to the main page
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
