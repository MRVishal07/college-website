<div class="container">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-bell"></i> Notice Board</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table class="table border">
        <thead>
            
        </thead>
        <tbody>
            <?php
            include 'connection.php';
            $result = $conn->query("SELECT * FROM pdfs ORDER BY uploaded_at DESC");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td><a href='uploads/{$row['filename']}' target='_blank'>{$row['title']}</a> <img src='./assest/new-icon.gif'</img></td>
                        <td>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>