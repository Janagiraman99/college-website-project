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
$sno = "";
$dob = "";
$email = "";
$rel = "";
$caste = "";
$bg = "";
$adno = "";
$fname = "";
$mname = "";
$foc = "";
$moc = "";
$tad = "";
$pad = "";
$pno = "";
$club = "";
$ai = "";
$men = "";
$rep = "";
$error="";
$message = "";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $un = $_POST['un'];
    $pw = $_POST['pw'];
    $id = $_POST['id'];
    $sno = $_POST['sno'];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $rel = $_POST["rel"];
    $caste = $_POST["caste"];
    $bg = $_POST["bg"];
    $adno = $_POST["adno"];
    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $foc = $_POST["foc"];
    $moc = $_POST["moc"];
    $tad = $_POST["tad"];
    $pad = $_POST["pad"];
    $pno = $_POST['pno'];
    $club = $_POST['club'];
    $ai = $_POST['ai'];
    $men = $_POST['men'];
    $rep = $_POST['rep'];

    do{
        if( empty($name)|| empty($un) || empty($pw) || empty($id) || empty($sno) || empty($pno) || empty($dob) || empty($email) || empty($rel) || empty($caste)
        || empty($caste) || empty($bg) || empty($adno) || empty($fname) || empty($mname) || empty($foc) || empty($moc) || empty($tad) || empty($pad) || empty($club) || empty($ai) || empty($men) || empty($rep)){
            $error = "All the Fields are must!";
            break;
        }
        $sql = "insert into student(studentname,username,password,id, student_phone, parent_phone,email, aadhar, religion, caste,perm_address, temp_address, dob, blood_grp, father_name, mother_name, father_occupation, mother_occupation,annual_income,club_name, mentor_name, remarks) 
        values('$name', '$un', '$pw','$id','$sno','$pno','$email','$adno','$rel','$caste','$pad','$tad','$dob','$bg','$fname','$mname','$foc','$moc','$ai', '$club','$men','$rep')";
        $result = $conn -> query($sql);

        if(!$result){
            $error = "Invalid Query:". $conn -> error;
            break;
        }

        $id="";
        $name = "";
        $un = "";
        $pw = "";
        $sno = "";
        $dob = "";
        $email = "";
        $bg = "";
        $rel = "";
        $caste = "";
        $adno = "";
        $fname = "";
        $mname = "";
        $foc = "";
        $moc = "";
        $tad = "";
        $pad = "";
        $pno = "";
        $club = "";
        $ai = "";
        $men = "";
        $rep = "";
        $message = "Data Added Successfully!!";
            header("location: h2.php");
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
    <h2> ADD NEW STUDENT</h2>
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
            <label> ID</label>
            <div class="col sm-6">
            <input  placeholder="id" class="form-control" name="id" value="<?php echo $id;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label>Student Phone No.</label>
            <div class="col sm-6">
            <input  placeholder="Student Phone No." class="form-control" name="sno" value="<?php echo $sno;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label>Date Of Birth</label>
            <div class="col sm-6">
            <input  placeholder="DOB" class="form-control" name="dob" value="<?php echo $dob;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label>E-Mail</label>
            <div class="col sm-6">
            <input  placeholder="E-Mail" class="form-control" name="email" value="<?php echo $email;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label>Religion</label>
            <div class="col sm-6">
            <input  placeholder="Religion" class="form-control" name="rel" value="<?php echo $rel;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label>Caste</label>
            <div class="col sm-6">
            <input  placeholder="Caste" class="form-control" name="caste" value="<?php echo $caste;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label>Blood-group</label>
            <div class="col sm-6">
            <input  placeholder="Blood-Group" class="form-control" name="bg" value="<?php echo $bg;?>">
            </div>
        </div>
        
        <div class="row mb-3">
            <label>Aadhar No.</label>
            <div class="col sm-6">
            <input  placeholder="Aadhar No." class="form-control" name="adno" value="<?php echo $adno;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label>Father Name</label>
            <div class="col sm-6">
            <input  placeholder="Father Name" class="form-control" name="fname" value="<?php echo $fname;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label>Mother Name</label>
            <div class="col sm-6">
            <input  placeholder="Mother Name" class="form-control" name="mname" value="<?php echo $mname;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label>Father Occupatiom</label>
            <div class="col sm-6">
            <input  placeholder="Occupation" class="form-control" name="foc" value="<?php echo $foc;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label>Mother Occupation</label>
            <div class="col sm-6">
            <input  placeholder="Occupation" class="form-control" name="moc" value="<?php echo $moc;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label>Temporary Address</label>
            <div class="col sm-6">
            <input  placeholder="Temp address" class="form-control" name="tad" value="<?php echo $tad;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label>Permanent Address</label>
            <div class="col sm-6">
            <input  placeholder="Perm address" class="form-control" name="pad" value="<?php echo $pad;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label>Parent Phone No.</label>
            <div class="col sm-6">
            <input  placeholder="Parent Phone No." class="form-control" name="pno" value="<?php echo $pno;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label>Club</label>
            <div class="col sm-6">
            <input  placeholder="Club" class="form-control" name="club" value="<?php echo $club;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label>Annual Income</label>
            <div class="col sm-6">
            <input  placeholder="Income" class="form-control" name="ai" value="<?php echo $ai;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label>Mentor</label>
            <div class="col sm-6">
            <input  placeholder="Mentor" class="form-control" name="men" value="<?php echo $men;?>">
            </div>
        </div>
        <div class="row mb-3">
            <label>Remarks</label>
            <div class="col sm-6">
            <input  placeholder="Remarks" class="form-control" name="rep" value="<?php echo $rep;?>">
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
                <a href='h2.php' class=' btn btn-outline-primary ' role='button'>CANCEL</a>
            </div>
        </div>

        </form>
        </div>
        </div>

        </div>


</body>
</html>