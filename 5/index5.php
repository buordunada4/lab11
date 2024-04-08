<?php
  ini_set('display_errors', 1);

  include('User.php');
  include('Worker5.php');
  include('Student.php');
  include('Driver.php');

  $workerIvan = new Worker5();
  $workerIvan->setName('Иван');
  $workerIvan->setAge(25);
  $workerIvan->setSalary(1000);

  $workerVasya = new Worker5();
  $workerVasya->setName('Вася');
  $workerVasya->setAge(26);
  $workerVasya->setSalary(2000);

  $sumSalary = $workerIvan->getSalary() + $workerVasya->getSalary();
  $sumAge = $workerIvan->getAge() + $workerVasya->getAge();

  $student = new Student();
  $student->setName('Студент');
  $student->setAge(20);
  $student->setStipend(500);
  $student->setCourse(2);

  $driver = new Driver(5, 'B'); // Передаем значения для $experience и $category
  $driver->setName('Водитель');
  $driver->setAge(30);
  $driver->setSalary(3000);

  echo "<h1>Результаты:</h1>";
  echo "<p>Сумма зарплат: $sumSalary</p>";
  echo "<p>Сумма возрастов: $sumAge</p>";

  echo "<h2>Данные студента:</h2>";
  echo "<p>Имя: {$student->getName()}</p>";
  echo "<p>Возраст: {$student->getAge()}</p>";
  echo "<p>Стипендия: {$student->getStipend()}</p>";
  echo "<p>Курс: {$student->getCourse()}</p>";

  echo "<h2>Данные водителя:</h2>";
  echo "<p>Имя: {$driver->getName()}</p>";
  echo "<p>Возраст: {$driver->getAge()}</p>";
  echo "<p>Зарплата: {$driver->getSalary()}</p>";
  echo "<p>Стаж вождения: {$driver->getExperience()} лет</p>";
  echo "<p>Категория вождения: {$driver->getCategory()}</p>";
?>