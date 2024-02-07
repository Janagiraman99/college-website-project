<?php
$uploadDirectory = 'nn/'; // Create this directory in your project

if(isset($_POST['submit'])){
    $pdfFile = $_FILES['pdfFile']['name'];
    $pdfTemp = $_FILES['pdfFile']['tmp_name'];

    move_uploaded_file($pdfTemp, $uploadDirectory.$pdfFile);

    // Now you can pass the file name or its path to Node.js for further processing

}