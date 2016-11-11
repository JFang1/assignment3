<?php
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {
		private $firstFt;
		private $secFt;
		private $nonFt;
		private $firstHalfMeme;
		private $secondHalfMeme;

		public function __construct($fruit1, $fruit2, $xFruit) {
			$this->firstFt = $fruit1;
			$this->secFt = $fruit2;
			$this->nonFt = $xFruit;
		}

		public function __makeFirstHalfMeme() {
			$this->firstHalfMeme = $this->firstFt.$this->nonFt;
		}

		public function __makeSecondHalfMeme() {
			$this->secondHalfMeme = $this->secFt.$this->nonFt;
		}

		public function getParentMeme() {
			return parent::getMeme();
		}

		public function getBetterMeme() {
			echo "This is better than the pen pineapple apple pen!";
			$improvedMeme = $this->getParentMeme."!!!!";
			return $improvedMeme;
		}
	}
