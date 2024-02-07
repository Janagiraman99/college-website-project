<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$DATABASE_NAME = 'csdept';
$conn = mysqli_connect($servername, $username, $password, $DATABASE_NAME);

if ( mysqli_connect_error() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teacher_id = $_POST["teacher_id"];
    $allotted_periods = $_POST["allotted_periods"];
    $allotted_date = $_POST["allotted_date"];

    // Check if the teacher already has an allotted period on the specified date
    $check_sql = "SELECT * FROM faculty WHERE id = $teacher_id AND alloted_date = '$allotted_date'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        echo "Teacher already has an allotted period on this date.";
    } else {
        // Update the database with the allotted periods and date
        $update_sql = "UPDATE faculty SET alloted_period = $allotted_periods, alloted_date = '$allotted_date' WHERE id = $teacher_id";

        if ($conn->query($update_sql) === TRUE) {
            echo "Periods allotted successfully";
            header('Location: viewperiod.php');
        } else {
            echo "Error: " . $update_sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
