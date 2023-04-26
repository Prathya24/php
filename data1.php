<?php
$servername = "localhost";
$username = "admin";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM user_detail";
$result = mysqli_query($conn, $sql);

$data = array();

while($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

$json_data = json_encode($data);

echo $json_data;
?>
