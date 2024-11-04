<?php
// Include your database connection
include('db_connect.php');

// Check if the ID is passed (through GET)
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the data for the given ID
    $query = "SELECT * FROM slider WHERE id = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    // Check if the query returned any result
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "No record found with the given ID.";
        exit;
    }
} else {
    echo "No ID provided.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Slider</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css"> <!-- Link to your custom stylesheet -->
</head>
<body>
<form action="Upload.php" method="POST" enctype="multipart/form-data">
  <!-- Include a hidden field to pass the ID -->
  <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">

  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" required>
  </div>

  <div class="mb-3">
    <label for="text" class="form-label">Text</label>
    <textarea class="form-control" id="text" name="text" rows="3"><?php echo htmlspecialchars($row['text']); ?></textarea>
  </div>

  <div class="mb-3">
    <label for="desktop_view_image" class="form-label">Desktop Image</label>
    <input class="form-control" type="file" id="desktop_view_image" name="desktop_view_image">
    <!-- Display the existing image file name and a preview -->
    <?php if (!empty($row['desktop_view_image'])): ?>
        <p>Current Desktop Image: <?php echo htmlspecialchars($row['desktop_view_image']); ?></p>
    <?php endif; ?>
  </div>

  <div class="mb-3">
    <label for="mobile_view_image" class="form-label">Mobile Image</label>
    <input class="form-control" type="file" id="mobile_view_image" name="mobile_view_image">
    <!-- Display the existing image file name and a preview -->
    <?php if (!empty($row['mobile_view_image'])): ?>
        <p>Current Mobile Image: <?php echo htmlspecialchars($row['mobile_view_image']); ?></p>
    <?php endif; ?>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>
