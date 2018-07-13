<?php
include_once ('db.php');
header('Content-Type: application/json');

session_start();


$rango = $_SESSION['id'];

$id = $_GET['id'];


$ran = explode('-',$rango);




//column_name BETWEEN value1 AND value2

















$q = "SELECT * FROM hoja1 WHERE id = $id  AND id BETWEEN ".$ran[0]." AND ".$ran[1]." and estatus = 0";
//$q = "SELECT * FROM hoja1 WHERE id = $id  AND id BETWEEN 1 AND 10 and estatus = 0";

$result = $conn->query($q);
$prods =[];
while($prod = $result->fetch_assoc()){
	$prods[] = $prod;
}

if (count($prods)==0){
    $qz = "SELECT * FROM hoja1 WHERE estatus = 0 AND id BETWEEN ".$ran[0]." AND ".$ran[1]." ORDER BY id ";
    //$qz = "SELECT * FROM hoja1 WHERE estatus = 0 AND id BETWEEN 1 AND 10 ORDER BY id ";
    $result = $conn->query($qz);
    $prods =[];
    while($prod = $result->fetch_assoc()){
        $prods[] = $prod;
    }
    if (count($prods)==0){
        echo "sinmas";
    }
    echo json_encode($prods[0]);
    exit(1);
}


echo json_encode($prods[0]);




?>