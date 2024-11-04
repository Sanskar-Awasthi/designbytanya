<?php 

$con = mysqli_connect('localhost','root');

if($con)
{
    echo "";
}
else{
    echo "Connection is not successful";
}

mysqli_select_db($con, 'silent_soul');

$query = "SELECT * FROM slider";
$result = mysqli_query($con, $query);

?>