<?php

Interface Istrategy
{
	public function algorithm($elements);
}

class Context
{
	private $strategy;

	public function __construct(Istrategy $strategy)
	{
		$this->strategy = $strategy;
	}

	public function algorithm($elements)
	{
		$this->strategy->algorithm($elements);
	}
}

:wq

