<?php

include_once('TextProduct.php');
include_once('GraphicProduct.php');
include_once('Factory.php');

class Client
{
	public function __construct()
	{
		$product = new Factory();
		echo $product->doFactory(new TextProduct());
		echo $product->doFactory(new GraphicProduct());
	}
}

$worker = new Client();
