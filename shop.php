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
for($j =0; $j <$tab->_howMany; $j++)
{
if(!isset($_SESSION["val$j"])) $_SESSION["val$j"]=0;
}
//var_dump($zero);
//session_destroy();
?>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css">
<script src="jquery.min.js"></script>
<script type="text/javascript" src="index.js"></script>
</head>

<body>
<?php


//$prod = new Product("żywiec", "3", $_SESSION['val']);
//echo $prod->showProd();
//$tab = new Table($dbo);
echo $tab->createTable();
//$zmienna = $tab->table();
//print_r($zmienna);
//print_r($zmienna[0]);
//echo $_SESSION['val'];
print_r($_SESSION);
?>
</body>
</html>
