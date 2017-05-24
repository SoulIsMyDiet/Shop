<?php

class Product{
private $_name;
private $_price;
private $_quantInBasket;

public function __construct($name, $price, $quant){
$this->_name = $name;
$this->_price = $price;
$this->_quantInBasket = $quant;
}
public function showProd($i){
return <<<PROD
<h3>$this->_name</h3>
<p>Cena: $this->_price</p>
<form action="process.php" method="post">
<input type="hidden" name="action" value="change" />
<input type="hidden" name="ses" value="$this->_quantInBasket" />
<input type="text" name="val$i" value="$this->_quantInBasket" />
<input type="submit" name="basket" value="Zaktualizuj kosz" disabled />
<div class="plus">plus</div>
<div class="minus">minus</div>
</form>
PROD;
}
public function showProdInBasket($i){
return <<<PROD
<h3>$this->_name</h3>
<p>Cena sztuki: $this->_price</p>
<p>Cena łaczna: ($this->_price*$this->_quantInBasket)</p>
<form action="process.php" method="post">
<input type="hidden" name="action" value="delete" />
<input type="text" readonly="readonly" name="del$i" value="$this->_quantInBasket" />
<input type="submit" name="frombasket" value="usun z kosza" />
</form>
PROD;
}
};

