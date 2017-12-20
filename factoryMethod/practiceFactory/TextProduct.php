<?php
include_once('Product.php');

class TextProduct implements Product
{
	private $mfgProduct;

	public function getProperties()
	{
		$this->mfgProduct = "This is Text Product\n";
		return $this->mfgProduct;
	}
}
