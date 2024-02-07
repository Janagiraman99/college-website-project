<!DOCTYPE html>
<html>
<head>
    <link rel = " stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js
"></script>
</head>

<body>
    <div class="container my-5">
    <a href='stuadd.php' class=' btn btn-primary ' role='button'>ADD</a>


<?php
session_start();
$servername = "localhost";
$username = "root";
$password="";
$databasename = "csdept";
$conn = mysqli_connect($servername, $username, $password,$databasename);
if($conn -> connect_error){
    die("CONNECTION FAILED!". $conn-> connect_error);

}


echo "<table>";
echo"<tr>";
echo"<th>id</th>";
echo"<th>STUDENT Name</th>";
echo"<th>Action</th>";
echo"</tr>";

$sql ="select * from student";

echo"<tr>";

if ($result = $conn -> query($sql)) {
    while ($row = $result -> fetch_row())
     {
echo"<td>";
echo $row[14];
echo"</td>";
echo"<td>";
echo $row[0];
echo"</td>";
echo"<td>
        <a href='stuedit1.php?id=$row[14]' class=' btn btn-primary btn-sm' role='button'>EDIT</a>
        <a href='studel.php?id=$row[14]' class=' btn btn-danger btn-sm' role='button'>DELETE</a>
    </td>";

echo"</tr>";}
echo "</table>";}
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
width: 400px;
margin-top: 0px;
margin-left: 400px;
overflow: hidden;
height: 35px;
text-align:center;
}
table{
border-radius: 15px;

}
</style>";
'<script>
function add(){
    var mytable =  document.getElementById("mytable");
        var rows = mytable.rows.length;
        var r = mytable.insertRow(rows);
        var c1 = r.insertCell(0);
        var c2 = r.insertCell(1);
        var checkbox = document.createElement("input");
        var faculty = document.createElement("input");
        checkbox.type = "checkbox";
        faculty.type = "text";
        c1.append(checkbox);
        c2.append(faculty);
    }

    function del()
    {
        var mytable = document.getElementById("mytable");
        var rows = mytable.rows.length;
        for(var i = rows - 1; i > 0; i--)
        {
            if(mytable.rows[i].cells[0].children[0].checked)
            {
                mytable.deleteRow(i);
            }
        }
    }
</script>'



?>
?>