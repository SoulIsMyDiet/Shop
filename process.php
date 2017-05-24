<?php
session_start();
print_r($_POST);
include_once 'dbcred.php';
include_once 'class.Table.php';
include_once 'class.Db.php';
include_once 'class.Product.php';
foreach ($A as $name => $val )
{
        define($name, $val);
}

//var_dump($_SESSION);
//header("Location: ./shop.php"); 
$actions = ['change' =>
['method' => 'processActual', 'header' => 'Location: shop.php'],
	    'delete' => 
['method' => 'processDelete', 'header' => 'Location: basket.php']
];

$dsn = "pgsql:host=".DB_HOST.";dbname=".DB_NAME;
$dbo = new PDO($dsn, 'ziom', 'ziomek');

//if ($_POST['token'] == $_SESSION['token'] && 
if(isset($actions[$_POST['action']]))
{
        $use_array = $actions[$_POST['action']];
        $obj = new Table($dbo);
        $method = $use_array['method'];
$obj->$method();
	header($use_array['header']);
  //              exit;
}
