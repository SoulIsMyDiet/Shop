<?php
session_start();
print_r($_POST);
$_SESSION['val0'] = $_POST['val0'];
$_SESSION['val1'] = $_POST['val1'];
$_SESSION['val2'] = $_POST['val2'];
//var_dump($_SESSION);
header("Location: ./shop.php"); 
