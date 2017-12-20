<?php
include_once('TextProduct.php');
include_once('Creator.php');
class TextFactory extends Creator
{
	public function factoryMethod()
	{
		$mfgFactory = new TextProduct();
		return $mfgFactory->getProperties(); 
	}
}
