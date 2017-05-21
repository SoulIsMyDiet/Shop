<?php
session_start();
print_r($_POST);
$_SESSION['val'] = $_POST['val'];
var_dump($_SESSION);
header("Location: ./shop.php"); 
