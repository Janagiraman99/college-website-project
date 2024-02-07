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
$type = "";
$credit = "";
$error="";
$message = "";
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(!isset($_GET['id'])){
        header("location:h2.php");
        exit;
    }
    $id = $_GET['id'];

    $sql = "select * from course where subjectcode = '$id'";
    $result = $conn -> query($sql);
    $row = $result -> fetch_row();

    if(!$row){
        header("location: h2.php");
        exit;
    }
    $id = $row[0];
    $name = $row[1];
    $type = $row[2];
    $credit = $row[3];

}
else{
    $name = $_POST['name'];
    $type = $_POST['type'];
    $credit = $_POST['credit'];
    $id = $_POST['id'];

    do{
        if( empty($name)|| empty($credit) || empty($type) || empty($id)){
            $error = "All the Fields are must!";
            break;
        }
        $sql = "UPDATE course SET subject = '$name', type = '$type', credit ='$credit' WHERE subjectcode = '$id' ";
        $result = $conn -> query($sql);

        if(!$result){
            $error = "Invalid Query:". $conn -> error;
            break;
        }

        $id="";
        $name = "";
        $type = "";
        $credit = "";
        $message = "Data Added Successfully!!";
            header("location: h3.php");
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
    <h2> ADD NEW COURSE</h2>
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
            <label> Subject code</label>
            <div class="col sm-6">
            <input  placeholder="Subject code" class="form-control" name="id" value="<?php echo $id;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label> Subject Name</label>
            <div class="col sm-6">
            <input  placeholder="Subject Name" class="form-control" name="name" value="<?php echo $name;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label> Subject type</label>
            <div class="col sm-6">
            <input  placeholder="Subject type" class="form-control" name="type" value="<?php echo $type;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label>Credit </label>
            <div class="col sm-6">
            <input  placeholder="credit" class="form-control" name="credit" value="<?php echo $credit;?>">
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
                <a href='h3.php' class=' btn btn-outline-primary ' role='button'>CANCEL</a>
            </div>
        </div>

        </form>
        </div>
        </div>

        </div>


</body>
</html>