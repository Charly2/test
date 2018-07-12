<?php
header('Content-Type: application/json');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datos";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$conn->set_charset("utf8");

$result = $conn->query("SELECT * FROM rows WHERE id = $id ");
$prods =[];
while($prod = $result->fetch_assoc()){
	$prods[] = $prod;
}


echo json_encode($prods);




?>