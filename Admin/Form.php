<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="css/custom.css"> <!-- Link to your custom stylesheet -->

<form action="Upload.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" required>
  </div>

  <div class="mb-3">
    <label for="text" class="form-label">Text</label>
    <textarea class="form-control" id="text" name="text" rows="3" ></textarea>
  </div>

  <div class="mb-3">
    <label for="desktop_view_image" class="form-label">Desktop Image</label>
    <input class="form-control" type="file" id="desktop_view_image" name="desktop_view_image" >
  </div>

  <div class="mb-3">
    <label for="mobile_view_image" class="form-label">Mobile Image</label>
    <input class="form-control" type="file" id="mobile_view_image" name="mobile_view_image" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>