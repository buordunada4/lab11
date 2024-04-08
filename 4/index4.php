<?php
	ini_set('display_errors', 1);

	include('worker4.php');

	$workerDima = new worker4();

	$multiplication = $workerDima->getAge() * $workerDima->getSalary();

	echo "Прозиведение возраста и зарплаты: $multiplication<br>";
?>