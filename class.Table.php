<?php
include_once 'class.Db.php';
class Table extends Db{
private $_howMany;
public function __construct($dbo=NULL, $howmany=3){
                parent::__construct($dbo);
		$this->_howMany = $howmany;
}


public function createTable(){
$row = "<tr>\n<td>".$obj[$i] = new Product($beer['name'], $beer['price'], $_SESSION['val'])."\n</td>\n</tr>";
$beers = $this->_table();
for($i = 0; $i < $this->_howMany; $i++)
{
$beer = $beers[$i];
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
