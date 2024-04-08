<?php
	class User
	{
		protected $name;
		protected $age;

		//	SETERS
		public function setName($name) {
			$this->name = $name;
		}

		public function setage($age) {
			$this->age = $age;
		}

		//	GETERS
		public function getName() {
			return $this->name;
		}

		public function getAge() {
			return $this->age;
		}
	}
?>