<?php
	class Worker3
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

			if ( !$this->checkAge() ) {
				echo "Неккоректный возраст '$this->name'<br>";
			}
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

		//	OTHER
		private function checkAge() {

			if ( $this->age >= 1 && $this->age <= 100 ) {
				return true;
			} else {
				return false;
			}
		}
	}
?>
