<?php
class Table extends Db{
private $_howMany;
/*
public function createTable($beer){
$row = "<tr>\n<td>".$obj[$i] = new Product($beer['name'], $beer['price'], $_SESSION['val'])."\n</td>\n</tr>";
for($i = 0, $i<$this->_howMany, $i++)
{
$rows.=$row
}


return
*/

public function table (){
$sql = "SELECT * FROM beer_table;";
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
