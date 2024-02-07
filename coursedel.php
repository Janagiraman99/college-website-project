<?php
if(isset($_GET["delid"])){
$id = $_GET['delid'];


$servername = "localhost";
$username = "root";
$password="";
$databasename = "csdept";
$conn =  mysqli_connect($servername, $username, $password, $databasename);

$sql = "DELETE from course where subjectcode = '$id'";
$result = $conn -> query($sql);

if ($result){

header("location: h3.php");
}}

?>