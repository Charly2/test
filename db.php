<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datos";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");



function guardar($data,$table,$conn)
{
    $keys = array_keys($data);
    $query = "INSERT INTO $table (";
    $keysmap = "";$i=0;$valuesmap ="";
    foreach ($keys as $key) {
        $i++;
        $keysmap .= $key;
        $valuesmap .= "'".$data[$key]."'";
        if ( $i< sizeof($keys)) {
            $keysmap .= ',';
            $valuesmap .= ',';
        }
    }
    $query.=$keysmap;
    $query.=') VALUES (';
    $query.=$valuesmap;
    $query.=')';


    $result = $conn->query($query);
    if ($result) {
        return $conn->insert_id;
    }else{
        return  0;
    }
}


?>