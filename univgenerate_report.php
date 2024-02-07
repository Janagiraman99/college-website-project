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

$result = $conn->query("SELECT studentmarks.studentname, studentmarks.id, studentmarks.pythonuniv, html.htmluniv, css.cssuniv, js.jsuniv, mysql.sqluniv, c.cuniv
FROM studentmarks
JOIN html ON studentmarks.id = html.id
JOIN css ON studentmarks.id = css.id
join js ON studentmarks.id = js.id
join mysql ON studentmarks.id = mysql.id
join c ON studentmarks.id = c.id");

echo"<div class='d'>";
echo "<h2>UNIV Exam Student Report</h2>";
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
            <td>{$row['pythonuniv']}</td>
            <td>{$row['htmluniv']}</td>
            <td>{$row['cssuniv']}</td>
            <td>{$row['jsuniv']}</td>
            <td>{$row['sqluniv']}</td>
            <td>{$row['cuniv']}</td>
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
        margin-right:550px;
        margin-left: 500px;
        margin-top:75px;
        padding-bottom:35px;
        height:25px;
        border-radius:5px;
    }