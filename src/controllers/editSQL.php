<?php
include("../db/db.php");

if(isset($_POST["submit"]) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];
    $description = $_POST['description'];

    $stmt = $connection->prepare("UPDATE users SET fname=?, lname=?, email=?, number=?, gender=?, city=?, description=? WHERE id=?");
    $stmt->bind_param("sssssssi", $fname, $lname, $email, $number, $gender, $city, $description, $id);
    $stmt->execute();

    if($stmt->affected_rows > 0) {
        $stmt->close();
        header('location:views/view.php');
        exit();
    } else {
        echo "Update failed!";
    }
}

mysqli_close($connection);
?>
