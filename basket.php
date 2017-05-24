<?php
session_start();

include_once 'dbcred.php';
foreach ($A as $name => $val )
{
        define($name, $val);
}
$dsn = "pgsql:host=".DB_HOST.";dbname=".DB_NAME;
$dbo = new PDO($dsn, 'ziom', 'ziomek');

include_once 'class.Product.php'; 
include_once 'class.Table.php'; 
include_once 'class.Db.php'; 
 
//$zero = 0; 
$tab = new Table($dbo);
echo $tab->createBasket();
