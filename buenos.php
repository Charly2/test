<?php
/**
 * Created by PhpStorm.
 * User: Charly
 * Date: 12/07/2018
 * Time: 03:01 PM
 */
include_once ('db.php');
session_start();


$dato = guardar($_POST,'buenos',$conn);

$result = $conn->query("UPDATE hoja1 SET estatus = 1 WHERE id = ".$_POST['id']);


echo "NEXT -> ".$_POST['id']+1;



?>

