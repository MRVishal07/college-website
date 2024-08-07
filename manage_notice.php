<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}    
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Faculty Records</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="vision-style.css">


<body>
   <?php
     include("header.php");
     include("side_bar.php");
   ?>

<div class="container border" id="container">
           <h2 class="heading">Upload Notices</h2>
        </div>
<div class="container mt-5 border">
    <form action="upload_notice.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">PDF Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="file">Choose PDF</label>
            <input type="file" name="file" id="file" class="form-control" accept="application/pdf" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>

    <h2 class="mt-5">Notices</h2>
    <table class="table border">
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connection.php';
            $result = $conn->query("SELECT * FROM pdfs ORDER BY uploaded_at DESC");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td><a href='uploads/{$row['filename']}' target='_blank'>{$row['title']}</a></td>
                        <td>
                            <form action='delete_notice.php' method='post' style='display:inline;'>
                                <input type='hidden' name='id' value='{$row['id']}'>
                                <button type='submit' class='btn btn-danger'>Delete</button>
                            </form>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
     include("footer.php");
?>

</body>
</html>