<?php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "Livefree1128");
define("DATABASE", "ged");
define("PORT", 3307);

$connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE,PORT);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    number VARCHAR(20) NOT NULL,
    gender ENUM('male', 'female') NOT NULL,
    city VARCHAR(50) NOT NULL,
    description TEXT NOT NULL,
    file_path VARCHAR(255) NOT NULL
)";

if (!mysqli_query($connection, $sql)) {
    echo "Error creating table: " . mysqli_error($connection);
} 

?>
