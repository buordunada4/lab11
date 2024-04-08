<?php
	class Worker4
	{
		private $name;
		private $age;
		private $salary;

		public function __construct($name = 'Дима', $age = 25, $salary = 1000) {
			$this->name = $name;
			$this->age = $age;
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