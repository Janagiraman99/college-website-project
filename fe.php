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
$name = "";
$un = "";
$pw = "";
$error = "";
$message = "";


if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(!isset($_GET['id'])){
        header("location:un2.php");
        exit;
    }
    $id = $_GET['id'];

    $sql = "select * from faculty where id = $id";
    $result = $conn -> query($sql);
    $row = $result -> fetch_row();

    if(!$row){
        header("location: un2.php");
        exit;
    }
    $name = $row[0];
    $un = $row[1];
    $pw = $row[2];
    $id = $row[3];
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $un = $_POST['un'];
    $pw = $_POST['pw'];


    $sql = "UPDATE 'faculty' SET 'Faculty name' = '$name', 'username' = '$un', 'password' ='$pw' WHERE 'id' = '$id' ";
    $result = $conn -> query($sql);
    
    if($result){
        $message = "Data Added Successfully!!";
        header("location: un2.php");
    }
    else{
        $error = "Invalid Query:". $conn -> error;

    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel = " stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
<div class="container">
    <h2> EDIT FACULTY</h2>
    <?php
        if(!empty($error)){
            echo"
            <div class=' alert alert-warning alert-dismisable fade show' role='alert'>
            <strong> $error</strong>
            <button type='button' class='btn-close' data-bs-dismiss ='alert' aria-label ='Close'></button>
            </div>
            ";
        }
    ?>
    <form  method="post">
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <div class="row mb-3">
            <label> Faculty Name</label>
            <div class="col sm-6">
            <input  placeholder="Faculty Name" class="form-control" name="name" value="<?php echo $name;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label> User Name</label>
            <div class="col sm-6">
            <input  placeholder="UserName" class="form-control" name="un" value="<?php echo $un;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label> Password</label>
            <div class="col sm-6">
            <input  placeholder="Password" class="form-control" name="pw" value="<?php echo $pw;?>">
            </div>
        </div>

        <?php
        if (!empty($message)){
            echo"
        <div class='row mb-3'>
            <div class='offset-sm-3 col-sm-6'>
                <div class=' alert alert-success alert-dismisable fade show' role='alert'>
                    <strong> $message</strong>
                    <button type='button' class='btn-close' data-bs-dismiss ='alert' aria-label ='Close'></button>
                </div>
            </div>
        </div>";
        }
        ?>
        <div class="row mb-3">
            <div class="offset-sm-3 col-sm-3 d-grid">
            <button type=" submit" class="btn btn-primary">SUBMIT</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a href='un2.php' class=' btn btn-outline-primary ' role='button'>CANCEL</a>
            </div>
        </div>

        </form>
        </div>
        </div>

        </div>


</body>
</html>