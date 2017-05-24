<?php
include_once 'class.Db.php';
class Table extends Db{
public $_howMany;
public function __construct($dbo=NULL, $howmany=3){
                parent::__construct($dbo);
		$this->_howMany = $howmany;
}
public function createObjects(){
$beers = $this->_table();
$obj = [];
for($i = 0; $i < $this->_howMany; $i++)
{
$beer = $beers[$i];
print_r($beer);
$obj[$i] = new Product($beer['Name'], $beer['Price'], $_SESSION["val$i"]);
//$objArray[$i] = $obj[$i];
}
return $obj;
}

public function createTable(){
$object = $this->createObjects();
$rows = '';
for($i = 0; $i < $this->_howMany; $i++)
{
//$beer = $beers[$i];
$row = "<tr>\n<td>".$object[$i]->showProd($i)."\n</td>\n</tr>";
$rows.=$row;
}
$html = "<table>".$rows."</table>";
$link = "<a href='basket.php'>Wejdź w koszyk</a>";
return $html.$link;
}

public function _table (){
$sql = "SELECT * FROM beer_table";
try
{
$stmt = $this->db->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
$stmt->closeCursor();
return $results;
}
catch(Exception $e)
{
die($e->Message());
}

}
public function reduceObjects(){
$bigarray = $this->createObjects();
var_dump($bigarray);
echo "</br>";
var_dump($_SESSION);
echo "</br>";
$pointer = $_SESSION;
echo "</br>";
var_dump($pointer);
echo "</br>";
function reduce($pointer, $bigarray){
if($pointer > 0) return $bigarray;
}
$smallarray = array_map("reduce", $pointer, $bigarray);
var_dump($smallarray);
echo "</br>";

$smallarray = array_filter($smallarray, function($obj){
return ($obj != NULL);
});
var_dump($smallarray);
echo "</br>";
return $smallarray;
}
public function createBasket(){
$object = $this->reduceObjects();
var_dump($object);
$rows = '';
foreach($object as $key => $obj)
{
//$beer = $beers[$i];
$row = "<tr>\n<td>".$obj->showProdInBasket($key)."\n</td>\n</tr>";
$rows.=$row;
}
$html = "<table>".$rows."</table>";
return $html;
}
public function processActual(){
echo "wykonuje sie";
for($i=0; $i<$this->_howMany; $i++)
{
if (isset($_POST["val$i"]))
$_SESSION["val$i"] = $_POST["val$i"];
}
}
public function processDelete(){
for($i=0; $i<$this->_howMany; $i++)
{
if (isset($_POST["del$i"]))
$_SESSION["val$i"] = 0;

}
}
}
