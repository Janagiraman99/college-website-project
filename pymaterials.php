<?php
if (isset($_POST['submit'])) {
    $targetDir = "nn/";
    $targetFile = $targetDir . basename($_FILES['pdfFile']['name']);
    $uploadOk = 1;
    $pdfFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file is a PDF
    if ($pdfFileType != "pdf") {
        echo "Sorry, only PDF files are allowed.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, the file already exists.";
        $uploadOk = 0;
    }

    // Check file size (adjust the limit as needed)
    if ($_FILES['pdfFile']['size'] > 50000000) {
        echo "Sorry, your file is too large. Max file size is 50 MB.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Upload the file
        if (move_uploaded_file($_FILES['pdfFile']['tmp_name'], $targetFile)) {
            echo "The file " . basename($_FILES['pdfFile']['name']) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

// Assuming you have a database connection
$servername = "localhost";
$username = "root";
$password="";
$databasename = "csdept";
$conn = mysqli_connect($servername, $username, $password,$databasename);

// Check connection
if($conn -> connect_error){
    die("CONNECTION FAILED!". $conn-> connect_error);
}


$fileName = basename($_FILES["pdfFile"]["name"]);

$sql = "INSERT INTO pdf_files (file_name, upload_date) VALUES ('$fileName', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<?php
// Fetch PDF files from the database
$sql = 'SELECT * FROM pdf_files';
    $result = $conn->query($sql);
$sq = "SELECT count(*) from pdf_files";
    $res = $conn->query($sq);

if ($res > 0) {
    while ($row = $result->fetch_assoc()) {
        $pdfPath = "nn/" . $row["file_name"];
        echo "<iframe src='$pdfPath' width='100%' height='600px'></iframe>";
    }
}

// Validate file type
$allowedExtensions = array("pdf");
$fileExtension = pathinfo($_FILES["pdfFile"]["name"], PATHINFO_EXTENSION);

if (!in_array($fileExtension, $allowedExtensions)) {
    echo "Invalid file type. Only PDF files are allowed.";
}
?>