<!DOCTYPE html>
<html>
<head>
    <link rel = " stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js
"></script>
</head>

<body>
    <div class="container my-5">

<?php
$servername = "localhost";
$username = "root";
$password="";
$databasename = "csdept";
$conn = mysqli_connect($servername, $username, $password,$databasename);
if($conn -> connect_error){
    die("CONNECTION FAILED!". $conn-> connect_error);
}
echo"<table>
    <tr>
    <th>Title</th>
    <th>Description</th>
    <th>Date</th>
    <th>Time</th>
    </tr>";
    $sql ="select * from lessons";
if ($result = $conn -> query($sql)) {
    while ($row = $result -> fetch_row())
     {

echo"<tr>";
echo"<td>";
echo $row[1];
echo"</td>";
echo"<td>";
echo $row[2];
echo"</td>";
echo"<td>";
echo $row[3];
echo"</td>";
echo"<td>";
echo $row[4];
echo"</td>";
echo"</tr>";}
echo"</table>";}

echo" <style>   body{
    background-color: lightblue;
}
th{
    background-color: teal;
}
button:hover{
    background-color: orange;
}
button{
    margin-top:60px;
    margin-left:280px;
    width: 150px;
    height:35px;
    border-radius:10px;
    background-color:coral;
}
td{
    background-color: white;
    border: 1px solid black;
    border-bottom-color: black;
    border-collapse: collapse;
    overflow: hidden;
    height: 35px;
    text-align:center;
}
table, th{
border: 1px solid black;
border-collapse: collapse;
width: 600px;
margin-top: 0px;
margin-left: 200px;
overflow: hidden;
height: 35px;
text-align:center;
}
table{
border-radius: 15px;

}
</style>";
?>
</div>
</body>
</html>
