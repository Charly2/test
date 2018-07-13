<?php
/**
 * Created by PhpStorm.
 * User: Charly
 * Date: 12/07/2018
 * Time: 12:36 PM
 */

session_start();
session_destroy();
header("Location: index.php");

?>