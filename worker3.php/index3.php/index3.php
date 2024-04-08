<?php
	ini_set('display_errors', 1);

	include('Worker3.php');

	$workerIvan = new Worker3();
	$workerIvan->setName('Иван');
	$workerIvan->setAge(101);
	$workerIvan->setSalary(1000);

	$workerVasya = new Worker3();
	$workerVasya->setName('Вася');
	$workerVasya->setAge(26);
	$workerVasya->setSalary(2000);

	$sumSalary = $workerIvan->getSalary() + $workerVasya->getSalary();
	$sumAge = $workerIvan->getAge() + $workerVasya->getAge();

	echo "Сумма зарплат: $sumSalary<br>";
	echo "Сумма возрастов: $sumAge<br>";
?>