<?php
	class Driver extends Worker5
	{
		private $experience;
		private $category;

		public function __construct($experience, $category) {
			$this->experience = $experience;
			$this->category = $category;
		}

		//	SETERS
		public function setExperience() {
			$this->experience = $experience;
		}

		public function setCategory() {
			$this->category = $category;
		}

		//	GETERS
		public function getExperience() {
			return $this->experience;
		}

		public function getCategory() {
			return $this->category;
		}
	}
?>