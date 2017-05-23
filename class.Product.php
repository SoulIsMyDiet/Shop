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
public function showProd(){
return <<<PROD
<h3>$this->_name</h3>
<p>Cena: $this->_price</p>
<form action="basket.php" method="post">
<input type="hidden" name="ses" value="$this->_quantInBasket" />
<input type="text" name="val" value="$this->_quantInBasket" />
<input type="submit" name="basket" value="Zaktualizuj kosz" disabled />
<div class="plus">plus</div>
<div class="minus">minus</div>
</form>
PROD;
}
};

