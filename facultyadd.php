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
$id="";
$name = "";
$un = "";
$pw = "";
$error="";
$message = "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $un = $_POST['un'];
    $pw = $_POST['pw'];
    $id = $_POST['id'];

    do{
        if( empty($name)|| empty($un) || empty($pw) || empty($id)){
            $error = "All the Fields are must!";
            break;
        }
        $sql = "insert into faculty values('$name', '$un', '$pw','$id')";
        $result = $conn -> query($sql);

        if(!$result){
            $error = "Invalid Query:". $conn -> error;
            break;
        }

        $id="";
        $name = "";
        $un = "";
        $pw = "";
        $message = "Data Added Successfully!!";
            header("location: un2.php");
            exit;

    }while (false);
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
    <h2> ADD NEW FACULTY</h2>
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
        <div class="row mb-3">
            <label> ID</label>
            <div class="col sm-6">
            <input  placeholder="id" class="form-control" name="id" value="<?php echo $id;?>">
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