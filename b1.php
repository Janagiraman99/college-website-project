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

$result = $conn->query("SELECT * from unit1 where studentname='Bharathi'");

echo"<div class='d'>";
echo "<h2>Bharathi Exam Report</h2>";
echo"</div>";
echo"<div class='div'>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Python</th>
            <th>HTML</th>
            <th>CSS</th>
            <th>JS</th>
            <th>SQL</th>
            <th>C</th>
        </tr>";

while ($row = $result -> fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['studentname']}</td>
            <td>{$row['pythonu1']}</td>
            <td>{$row['htmlu1']}</td>
            <td>{$row['cssu1']}</td>
            <td>{$row['jsu1']}</td>
            <td>{$row['sqlu1']}</td>
            <td>{$row['cu1']}</td>
          </tr>";
}

echo "</table>";
echo"</div>";

$conn->close();
?>
<style>
    body{
        background-color: teal;
    }
    table,th,td{
        border-collapse:collapse;
        width:650px;
        height:35px;
        text-align: center;

    }
    table{
        border-radius:5px;
    }
    table:hover{
        box-shadow:0 0 50px lightseagreen;
    }
    .div{
        border: 1px solid black;
        background-color: lightblue;
        margin-left:300px;
        margin-top:100px;
        margin-right:400px;
    }

    .d{
        border: 1px solid black;
        background-color: orange;
        margin-right:600px;
        margin-left: 450px;
        margin-top:65px;
        padding-left:20px;
        padding-bottom:35px;
        height:35px;
        border-radius:5px;
    }