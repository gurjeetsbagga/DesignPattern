<?php
include_once('Creator.php');
include_once('GraphicProduct.php');

class GraphicFactory extends Creator
{
	public function factoryMethod()
	{
		$mfgProduct = new GraphicProduct();
		return $mfgProduct->getProperties();
	}
}
