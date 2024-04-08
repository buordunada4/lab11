<?php
	ini_set('display_errors', 1);

	include('Worker.php');

	$workerIvan = new Worker();
	$workerIvan->name = 'Иван';
	$workerIvan->age = 25;
	$workerIvan->salary = 1000;

	$workerVasya = new Worker();
	$workerVasya->name = 'Вася';
	$workerVasya->age = 26;
	$workerVasya->salary = 2000;

	$sumSalary = $workerIvan->salary + $workerVasya->salary;
	$sumAge = $workerIvan->age + $workerVasya->age;

	echo "Сумма зарплат: $sumSalary<br>";
	echo "Сумма возрастов: $sumAge<br>";
?>
