<?php
session_start();
$zero = 0;
if(!isset($_SESSION['val'])) $_SESSION['val']=0;
//var_dump($zero);
//session_destroy();
include_once 'class.Product.php';
include_once 'class.Table.php';
include_once 'class.Db.php';
?>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css">
<script src="jquery.min.js"></script>
<script type="text/javascript" src="index.js"></script><!-- this line doesn't work-->
</head>

<body>
<?php
include_once 'dbcred.php';
foreach ($A as $name => $val )
{
        define($name, $val);
}
$dsn = "pgsql:host=".DB_HOST.";dbname=".DB_NAME;
$dbo = new PDO($dsn, 'ziom', 'ziomek');


$prod = new Product("żywiec", "3", $_SESSION['val']);
echo $prod->showProd();
$tab = new Table($dbo);
echo $tab->createTable();
$zmienna = $tab->table();
print_r($zmienna);
print_r($zmienna[0]);
//echo $_SESSION['val'];
//print_r($_SESSION);
?>
</body>
</html>
