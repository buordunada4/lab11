<?php
	ini_set('display_errors', 1);

	include('Worker2.php');

	$workerIvan = new Worker2();
	$workerIvan->setName('Иван');
	$workerIvan->setAge(25);
	$workerIvan->setSalary(1000);

	$workerVasya = new Worker2();
	$workerVasya->setName('Вася');
	$workerVasya->setAge(26);
	$workerVasya->setSalary(2000);

	$sumSalary = $workerIvan->getSalary() + $workerVasya->getSalary();
	$sumAge = $workerIvan->getAge() + $workerVasya->getAge();

	echo "Сумма зарплат: $sumSalary<br>";
	echo "Сумма возрастов: $sumAge<br>";
?>