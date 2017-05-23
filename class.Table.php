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

return $html;
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
}
