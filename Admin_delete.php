<?php
include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM admins WHERE id = '$id'";
$data = mysqli_query($conn,$query);

if($data){
    echo "Record Deleted";
}
else{
    echo "Failed To Delete";
}
?>