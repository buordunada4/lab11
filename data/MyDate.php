<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class MyDate {
    // Свойства
    private $date;

    // Конструктор
    public function __construct($year, $month, $day) {
        $this->setDate($year, $month, $day);
    }

    // Методы
    public function isValidDate($year, $month, $day) {
        return checkdate($month, $day, $year);
    }

    public function setDate($year, $month, $day) {
        if ($this->isValidDate($year, $month, $day)) {
            $this->date = new DateTime("$year-$month-$day");
        } else {
            throw new Exception("Invalid date.");
        }
    }

    public function getYear() {
        return $this->date->format('Y');
    }

    public function getMonth() {
        return $this->date->format('n');
    }

    public function getDay() {
        return $this->date->format('j');
    }

    public function toString() {
        return $this->date->format('l, M j, Y');
    }

    public function nextDay() {
        $this->date->modify('+1 day');
        return $this;
    }

    public function nextMonth() {
        $this->date->modify('+1 month');
        return $this;
    }

    public function nextYear() {
        $this->date->modify('+1 year');
        return $this;
    }

    public function previousDay() {
        $this->date->modify('-1 day');
        return $this;
    }

    public function previousMonth() {
        $this->date->modify('-1 month');
        return $this;
    }

    public function previousYear() {
        $this->date->modify('-1 year');
        return $this;
    }
}

?>
