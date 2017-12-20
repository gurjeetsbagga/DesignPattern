<?php

class Client
{
	private $fly1;
	private $fly2;

	private $c1fly;
	private $c2fly;
	private $updateCloneFly;

	public function __construct()
	{
		$this->fly1 = new MaleProto();
		$this->fly2 = new FemaleProto();

		$this->c1fly = clone $this->fly1;
		$this->c2fly = clone $this->fly2;
		$this->updatedCloneFly = clone $this->fly2;

		$this->c1fly->mated = "true";
		$this->c2fly->fecundity = "186";

		$this->updatedCloneFly->eyeColor = "purple";
		$this->updatedCloneFly->wingBeat = "220";
		$this->updatedCloneFly->unitEyes = "750";
		$this->updatedCloneFly->fecundity = "92";

		$this->showFly($this->c1fly);
		$this->showFly($this->c2fly);
		$this->showFly($this->updatedCloneFly);
	}

	private function showFly(IPrototype $fly)
	{
		echo "Eye Color: " . $fly->eyeColor . "\n";
		echo "Wing Beasts/second: " . $fly->wingBeat . "\n";
		echo "Eye units: " . $fly->unitEyes . "\n";
		$genderNow = $fly::gender;
		echo "Gender: " . $genderNow . "\n";
		if($genderNOw == "FEMALE")
		{
			echo "Number of eggs: " . $fly->fecundity . "\n";
		}
		else
		{
			echo "Mated: " . $fly->mated . "\n";
		}
	}
}

$worker = new Client();

