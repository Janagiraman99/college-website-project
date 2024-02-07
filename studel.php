<?php
if(isset($_GET["id"])){
$id = $_GET['id'];


$servername = "localhost";
$username = "root";
$password="";
$databasename = "csdept";
$conn =  mysqli_connect($servername, $username, $password, $databasename);

$sql = "DELETE from student where id = $id";
$result = $conn -> query($sql);
}
if ($result){

header("location: h2.php");
}

?>