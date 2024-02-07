<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Attendance System</title>
    <style>
        body{
            background-color: lightseagreen;
        }
        h2{
            margin-left:500px;
        }
        div{
            
            background-color: #f2f2f2;
            margin-left: 300px;
            margin-right: 250px;
        }
        table {
            border-collapse: collapse;
            width:800px;
            
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: teal;
        }
        .submit-btn {
            margin-left: 850px;
            width: 150px;
            height:35px;
            border-radius: 5px;
            font-size: large;
            font-family:TimesNewRoman;
            margin-top: 50px;
            background-color: orange;
        }
    </style>
</head>
<body>
    <h2>Online Attendance System</h2>

    <form action="process.php" method="post">
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Present</th>
            </tr>

            <?php
            // Connect to the database
$servername = "localhost";
$username = "root";
$password="";
$databasename = "csdept";
$conn = mysqli_connect($servername, $username, $password,$databasename);
if($conn -> connect_error){
    die("CONNECTION FAILED!". $conn-> connect_error);

}

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch student records from the database
            $result = $conn->query("SELECT id, studentname FROM student");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['studentname']}</td>
                        <td><input type='checkbox' name='attendance[]' value='{$row['id']}'></td>
                      </tr>";
            }

            // Close the database connection
            $conn->close();
            ?>
        </table>
        </div>
        <input type="submit" value="Submit Attendance" class="submit-btn">
    </form>
</body>
</html>
