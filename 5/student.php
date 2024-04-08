<?php
	class Student extends User
	{
		private $stipend;
		private $course;

		//	SETERS
		public function setStipend($stipend) {
			$this->stipend = $stipend;
		}

		public function setCourse($course) {
			$this->course = $course;
		}

		//	GETERS
		public function getStipend() {
			return $this->stipend;
		}

		public function getCourse() {
			return $this->course;
		}
	}
?>