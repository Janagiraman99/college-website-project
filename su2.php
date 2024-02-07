<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Scores</title>
</head>
<body>
    <div>
    <h2>Update SQL Scores</h2>
    <form action="process_scoressu2.php" method="post">
        <!-- Add input fields for student scores -->
       + <?php
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

        // Fetch existing student data
        $result = mysqli_query($conn, "SELECT id, studentname FROM mysql");
        while ($row = mysqli_fetch_assoc($result)) {
            echo"<div>";
            echo "<label>{$row['studentname']}</label><br>";
            echo "<input type='number' name='su2[{$row['id']}]' placeholder='UNIT 2'><br><br>";
            echo"</div>";
        }

        // Close the connection
        mysqli_close($conn);
        ?>
        <input type="submit" value="Update Scores" style=" width:100px; height:35px;">
    </form>
    </div>
</body>

<style>
    body{
        padding: 50px;
        border: 1px solid black;
        box-shadow: 0 0 15px grey;
        margin-left: 400px;
        margin-right:200px;
        margin-top:10px;
        width:300px;
        height:500px;
        margin-bottom:0px;
    }
    input{
        width:150px;
        height:30px;
        border-radius: 5px;
    }
</style>
</html>