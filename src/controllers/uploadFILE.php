<?php
require_once (__DIR__.'../db/db.php');
if(isset($_FILES["file"])) {
    
    $filep = $_FILES["file"];
    $fileName = $filep["name"];
    $fileTmpName = $filep["tmp_name"];
    $fileSize = $filep["size"];
    $fileError = $filep["error"];
    $maxFileSize = 24 * 1024 * 1024;
    $destination = '';

    if ($fileSize <= $maxFileSize) {
        if ($fileError === 0) {
            $uploadDirectory = "../uploads/";
            $destination = $uploadDirectory . $fileName;
            move_uploaded_file($fileTmpName, $destination);
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }
    } else {
        echo "File size exceeds the limit of 24MB.";
    }
}

?>
