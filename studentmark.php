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
$u1 ="";
$u2 ="";
$u3 ="";
$u4 ="";
$u5 ="";
$cia1 ="";
$cia2 ="";
$model="";
$univ="";
$un = "";
$pw = "";
$error="";
$message = "";

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(!isset($_GET['id'])){
        header("location:f1.php");
        exit;
    }
    $id = $_GET['id'];

    $sql = "select * from student where id = $id";
    $result = $conn -> query($sql);
    $row = $result -> fetch_row();

    if(!$row){
        header("location: f3.php");
        exit;
    }
    $name = $row[0];
    $u1 =$row[2];
    $u2 =$row[3];
    $u3 =$row[4];
    $u4 =$row[5];
    $u5 =$row[6];
    $cia1 =$row[7];
    $cia2 =$row[8];
    $model=$row[9];
    $univ=$row[10];
    $un = $row[12];
    $pw = $row[13];
    $id = $row[14];
}

else{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $un = $_POST['un'];
    $pw = $_POST['pw'];
    $u1 = $_POST['u1'];
    $u2 =$_POST['u2'];
    $u3 =$_POST['u3'];
    $u4 =$_POST['u4'];
    $u5 =$_POST['u5'];
    $cia1 =$_POST['cia1'];
    $cia2 =$_POST['cia2'];
    $model=$_POST['model'];
    $univ=$_POST['univ'];
    do{
        if( empty($name)|| empty($un) || empty($pw) || empty($id)){
            $error = "All the Fields are must!";
            break;
        }
        $sql =  "UPDATE student SET studentname = '$name',  u1=$u1, u2 = $u2,u3 = $u3,
        u4 = $u4, u5=$u5, cia1=$cia1, cia2=$cia2, model=$model, ue=$univ, username = '$un', password = '$pw' WHERE id = $id";
       echo $sql;
       $result = $conn -> query($sql);

        if(!$result){
            $error = "Invalid Query:". $conn -> error;
            break;
        }

        $message = "Data Added Successfully!!";
        header("location: f3.php");
        exit;

    }while (true);
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
    <h2> EDIT STUDENT</h2>
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
            <label> Student Name</label>
            <div class="col sm-6">
            <input  placeholder="Student Name" class="form-control" name="name" value="<?php echo $name;?>">
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
            <label> UNIT 1</label>
            <div class="col sm-6">
            <input  placeholder="UNIT 1" class="form-control" name="u1" value="<?php echo $u1;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label> Unit 2</label>
            <div class="col sm-6">
            <input  placeholder="Unit 2" class="form-control" name="u2" value="<?php echo $u2;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label> Unit 3</label>
            <div class="col sm-6">
            <input  placeholder="Unit 3" class="form-control" name="u3" value="<?php echo $u3;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label> Unit 4</label>
            <div class="col sm-6">
            <input  placeholder="Unit 4" class="form-control" name="u4" value="<?php echo $u4;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label> Unit 5</label>
            <div class="col sm-6">
            <input  placeholder="Unit 5" class="form-control" name="u5" value="<?php echo $u5;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label> CIA 1</label>
            <div class="col sm-6">
            <input  placeholder="CIA 1" class="form-control" name="cia1" value="<?php echo $cia1;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label> CIA 2</label>
            <div class="col sm-6">
            <input  placeholder="CIA 2" class="form-control" name="cia2" value="<?php echo $cia2;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label> Model</label>
            <div class="col sm-6">
            <input  placeholder="Model" class="form-control" name="model" value="<?php echo $model;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label> University</label>
            <div class="col sm-6">
            <input  placeholder="University" class="form-control" name="univ" value="<?php echo $univ;?>">
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