<?php
include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM faculty WHERE id = '$id'";
$data = mysqli_query($conn,$query);

if($data){
    echo "<script>alert('Record Deleted');</script>";
}
else{
    echo "<script>alert('Record Failed to Deleted');</script>";
}
?>