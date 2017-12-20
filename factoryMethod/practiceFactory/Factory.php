<?php

include_once('Product.php');

class Factory
{
	public function doFactory(Product $product)
	{
		return $product->getProperties();
	}
}
