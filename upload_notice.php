<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $file = $_FILES['file'];

    if ($file['type'] != 'application/pdf') {
        echo "Please upload a valid PDF file.";
        exit;
    }

    $filename = uniqid() . '-' . $file['name'];
    $destination = 'uploads/' . $filename;

    if (move_uploaded_file($file['tmp_name'], $destination)) {
        $stmt = $conn->prepare("INSERT INTO pdfs (title, filename) VALUES (?, ?)");
        $stmt->bind_param("ss", $title, $filename);
        $stmt->execute();
        $stmt->close();
        header("Location: manage_notice.php");
    } else {
        echo "Failed to upload file.";
    }
}
?>