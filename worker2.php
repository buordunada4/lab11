<?php
	class Worker2
	{
		private $name;
		private $age;
		private $salary;

		//	SETERS
		public function setName($name) {
			$this->name = $name;
		}

		public function setAge($age) {
			$this->age = $age;
		}

		public function setSalary($salary) {
			$this->salary = $salary;
		}

		//	GETERS
		public function getName() {
			return $this->name;
		}

		public function getAge() {
			return $this->age;
		}

		public function getSalary() {
			return $this->salary;
		}
	}
?>