<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $stmt = $conn->prepare("SELECT filename FROM pdfs WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($filename);
    $stmt->fetch();
    $stmt->close();

    if ($filename) {
        unlink('uploads/' . $filename);

        $stmt = $conn->prepare("DELETE FROM pdfs WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    header("Location: manage_notice.php");
}
?>