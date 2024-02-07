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

$result = $conn->query("SELECT * from html");

echo"<div class='d'>";
echo "<h2>HTML Student Report</h2>";
echo"</div>";
echo"<div class='div'>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>UNIT1</th>
            <th>UNIT2</th>
            <th>UNIT3</th>
            <th>UNIT4</th>
            <th>UNIT5</th>
            <th>CIA</th>
            <th>MODEL</th>
            <th>UNIV</th>
        </tr>";

while ($row = $result -> fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['studentname']}</td>
            <td>{$row['htmlu1']}</td>
            <td>{$row['htmlu2']}</td>
            <td>{$row['htmlu3']}</td>
            <td>{$row['htmlu4']}</td>
            <td>{$row['htmlu5']}</td>
            <td>{$row['htmlcia']}</td>
            <td>{$row['htmlmodel']}</td>
            <td>{$row['htmluniv']}</td>
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
        margin-right:620px;
        margin-left: 450px;
        margin-top:75px;
        padding-left:15px;
        padding-bottom:35px;
        height:35px;
        border-radius:5px;
    }