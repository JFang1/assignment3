<?php
	// This is the file for the parent class

	class ParentClass {
		private $firstFruit;
		private $secondFruit;
		private $nonFruitObj;
		private $newMeme;

		public function __construct($fF, $sF, $nFO)  {
			$this->firstFruit = $fF;
			$this->secondFruit = $sF;
			$this->nonFruitObj = $nFO;
		}

		public function __makeMeme() {
			$this->newMeme = $this->nonFruitObj.$this->firstFruit.$this->secondFruit.$this->nonFruitObj;
		}

		public function getFirstFruit() {
			return $this->firstFruit;
		}

		public function getSecondFruit() {
			return $this->secondFruit;
		}

		public function getNonFruitObj() {
			return $this->nonFruitObj;
		}

		public function getMeme() {
			return $this->newMeme;
		}
	}
