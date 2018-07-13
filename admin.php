<?php
/**
 * Created by PhpStorm.
 * User: Charly
 * Date: 12/07/2018
 * Time: 12:33 PM
 */
session_start();

print_r($_POST);

$_SESSION['id']=$_POST['value'];
echo json_encode($_POST['value'])

?>