<?php

require_once(__DIR__.'../../db/db.php');
echo "3";
if (isset($_POST["submit"])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $description = $_POST['description'];


    if (isset($_FILES["file"])) {
        $filep = $_FILES["file"];
        $fileName = $filep["name"];
        $fileTmpName = $filep["tmp_name"];
        $fileSize = $filep["size"];
        $fileError = $filep["error"];
        $maxFileSize = 24 * 1024 * 1024;
        $destination = '';

    
        if ($fileSize <= $maxFileSize && $fileError === 0) {
            
            $uploadDirectory = "../../uploads/";
            $destination = $uploadDirectory . $fileName;
            move_uploaded_file($fileTmpName, $destination);
        } else {
            echo "Error uploading file.";
            exit(); 
        }
    }
    $sql = "INSERT INTO `users`(`fname`, `lname`, `email`, `number`, `city`, `gender`, `description`, `file_path`) 
    VALUES ('$fname','$lname','$email','$number','$city','$gender','$description','$destination')";

    $result = mysqli_query($connection, $sql);
    if (!$result) {
        die("Query Failed" . mysqli_error($connection));
    } else {
        header('location:GED/src/views/view.php');
    }
}
?>
