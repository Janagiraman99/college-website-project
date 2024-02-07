<!DOCTYPE html>
<html>
<head>
    <link rel = " stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container my-5">
    <a href='courseadd.php' class=' btn btn-primary ' role='button'>ADD</a>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "csdept";
$conn = mysqli_connect($servername, $username, $password, $databasename);
if($conn -> connect_error){
    die("Connection Failed!:".$conn -> connect_error);
}

$sql = "select * from course";
echo"<table>";
echo"<tr>";
echo"<th>SUBJECT CODE</th>";
echo"<th>SUBJECT NAME</th>";
echo"<th>SUBJECT TYPE</th>";
echo"<th>CREDIT</th>";
echo"<th>ACTION</th>";
echo"</tr>";


echo"<tr>";
if($result = $conn -> query($sql)){
    while ($row = $result -> fetch_row()){

echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo"<td>
        <a href='courseedit.php?id=$row[0]' class=' btn btn-primary btn-sm' role='button'>EDIT</a>
        <a href='coursedel.php?delid=$row[0]' class=' btn btn-danger btn-sm' role='button'>DELETE</a>
    </td>";

echo"</tr>";

}
echo"</table>";}
echo" <style>   body{
    background-color: lightblue;
}
th{
    background-color: teal;
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
margin-top: 40px;
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