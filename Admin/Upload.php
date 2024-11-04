<?php
// Include your database connection
include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if ID is provided to determine update
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $text = $_POST['text'];

        // Directory path for images
        $imgDir = 'img/';

        // Use provided filenames, if available; otherwise, keep existing filenames
        $desktop_view_image = !empty($_POST['desktop_view_image']) ? $imgDir . $_POST['desktop_view_image'] : $row['desktop_view_image'];
        $mobile_view_image = !empty($_POST['mobile_view_image']) ? $imgDir . $_POST['mobile_view_image'] : $row['mobile_view_image'];

        // Prepare the update statement
        $query = "UPDATE slider SET title = ?, text = ?, desktop_view_image = ?, mobile_view_image = ? WHERE id = ?";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, 'sssii', $title, $text, $desktop_view_image, $mobile_view_image, $id);
        
        if (mysqli_stmt_execute($stmt)) {
            echo "Slide updated successfully.";
        } else {
            echo "Error updating slide.";
        }
    } else {
        echo "No ID provided for update.";
    }
}
header('Location: index.php');
?>
