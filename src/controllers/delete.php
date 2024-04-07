<?php 
require_once(__DIR__.'../db/db.php');
$id=$_GET["id"];
$sql= "DELETE FROM `users` WHERE id=$id";
$result=mysqli_query($connection,$sql);

if(!$result){
    echo "Failed :". mysqli_error($connection);
}
?>