<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password="";
$databasename = "csdept";
$conn = mysqli_connect($servername, $username, $password,$databasename);

// Check connection
if($conn -> connect_error){
    die("CONNECTION FAILED!". $conn-> connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $subject_id = $_POST["subject_id"];
    $attendance_date = $_POST["attendance_date"];

    // Check if attendance is already marked for the given date and subject
    $check_query = "SELECT * FROM attendance WHERE subject_id = $subject_id AND attendance_date = '$attendance_date'";
    $result = $conn->query($check_query);
    $q = "SELECT count(*) from attendance WHERE subject_id = $subject_id AND attendance_date = '$attendance_date'";
    $result = $conn->query($q);
    if ($q == 0 ) {
        // Mark attendance for each selected student
        foreach ($_POST["student_ids"] as $student_id) {
            $insert_query = "INSERT INTO attendance  VALUES ($student_id, '$attendance_date', 'present',  '$subject_id')";
            echo $insert_query;
            $conn->query($insert_query);

        }
        echo "Attendance marked successfully!";
    } else {
        echo "Attendance already marked for this date and subject.";
    }
}

// Display the form to mark attendance
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance System</title>
</head>
<body>
    <h2 style ="margin-left: 550px; ">Mark Attendance</h2>
    <div>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="subject_id">Subject:</label>
        <select name="subject_id" required>
            <!-- Populate this dropdown with subject names from the database -->
            <?php
            $subjects_query = "SELECT * FROM course";
            $subjects_result = $conn->query($subjects_query);

            while ($row = $subjects_result->fetch_assoc()) {
                echo "<option value='{$row["subjectcode"]}'>{$row["subject"]}</option>";
            }
            ?>
        </select><br><br>

        <label for="attendance_date">Date:</label>
        <input type="date" name="attendance_date" required><br>

        <label>Students:</label><br>
        <!-- Populate this checkbox list with student names from the database -->
        <?php
        $students_query = "SELECT * FROM student";
        $students_result = $conn->query($students_query);

        while ($row = $students_result->fetch_assoc()) {
            echo "<input type='checkbox' name='student_ids[]' value='{$row["id"]}' style = 'height: 20px; '>{$row["studentname"]}<br>";
        }
        ?><br>

        <input type="submit" value="Mark Attendance">
    </form>
    </div>
</body>
<style>
    body{
        background-color:lightseagreen;
    }
    div{
        border: 1px solid black;
        margin-left: 350px;
        margin-top:80px;
        margin-right:400px;
        margin-bottom:00px;
        padding-left: 50px;
        padding-top:35px;
        padding-bottom:35px;
        box-shadow:0 0 20px grey;
        background-color:teal;
    }
    label{
        font-size: large;
        font-family: TimesNewRoman;
    }
    input{
        width:150px;
        height:35px;
        border-radius:5px;
        font-size: large;
        font-family: TimesNewRoman;
        margin-left:50px;
    }
    input:hover{
        background-color: orange;
    }
</style>
</html>

