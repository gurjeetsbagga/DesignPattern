<?php

class abc
{
	private $d;
	public function __construct()
	{
	   echo "Ki Haal Chaal";
	}

	public function hello()
	{
		echo $this->d;
		echo "\n Bole to \n";
	}
}

$worker = new abc();
$original = clone $worker;



