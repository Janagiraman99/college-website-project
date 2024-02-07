<?php
$servername = "localhost";
$username = "root";
$password="";
$databasename = "csdept";
$conn = mysqli_connect($servername, $username, $password,$databasename);
if($conn -> connect_error){
    die("CONNECTION FAILED!". $conn-> connect_error);

}


$id ="";
$name ="";
$u1 = "";

    $name = $row[0];
    $u1 =$row[2];
    $id = $row[14];

if (isset($_SESSION['submit'] == true)){
    do{
    $id = $row[14];
    $name = $row[0];
    $u1 = $_POST['u1'];
    $sql = "UPDATE 'student' SET  u1='$u1' WHERE id = $id";
        $result = $conn -> query($sql);

        if(!$result){
            $error = "Invalid Query:". $conn -> error;
            break;
        }

        $message = "Data Added Successfully!!";
    
        exit;
    }
        while(true);}
?>
<form method='POST' action=''>
<input type="hidden" name="id" value="<?php echo $id;?>">
<table>
         <tr>
        <th>STUDENT NAME</th>
        <th> UNIT 1</th>
        </tr>
    <?php
$u1='';
$sql ="select * from student";
if ($result = $conn -> query($sql)) {
    while ($row = $result -> fetch_row())
     {
 echo"
    <tr>
    <td>
    <input type='text' name='unit1' value= $row[0]>
    </td>
    <td>
    <input type='text' name='unit1' value= $u1>
    </td>
    </tr>
</form>";}
echo"</table>";}
echo" <button type='submit' value='submit' name='submit'>submit</button>";
?>