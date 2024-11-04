<?php
include('db_connect.php');

// 2. Fetch data from the database
$sql = "SELECT * FROM slider";  // Assuming 'slider' is your table name
$result = $con->query($sql);

// 3. HTML to display data in a table
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data from Database</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        img {
            width: 100px;  /* Adjust the image width as needed */
        }
        .add-slide-btn {
            margin-top: 20px;
        }
        .add-slide-btn a {
            text-decoration: none;
        }
        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #218838;
        }
        .edit-link {
            color: blue;
            text-decoration: none;
        }
        .edit-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h1>Home Slider</h1>

<?php
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Title</th><th>Text</th>
    <th>Desktop Image</th>
    <th>Mobile Image</th>
    <th>Edit</th></tr>";  // Added an "Edit" column
    // 4. Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["id"]. "</td>
            <td>" . $row["title"]. "</td>
            <td>" . $row["text"]. "</td>
            <td><img src='" . $row["desktop_view_image"] . "' alt='Desktop Image'></td>
            <td><img src='" . $row["mobile_view_image"] . "' alt='Mobile Image'></td>
            <td><a class='edit-link' href='edit.php?id=" . $row["id"] . "'>Edit</a></td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// 5. Close the connection
$con->close();
?>

<!-- Add New Slide Button -->
<div class="add-slide-btn">
    <a href="form.php">
        <button>Add New Slide</button>
    </a>
</div>

</body>
</html>
