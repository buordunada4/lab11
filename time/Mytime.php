<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class MyTime {
    // Properties
    private $hour;
    private $minute;
    private $second;

    // Constructor
    public function __construct($hour, $minute, $second) {
        $this->setTime($hour, $minute, $second);
    }

    // Methods
    public function setTime($hour, $minute, $second) {
        $this->setHour($hour);
        $this->setMinute($minute);
        $this->setSecond($second);
    }

    public function getHour() {
        return $this->hour;
    }

    public function getMinute() {
        return $this->minute;
    }

    public function getSecond() {
        return $this->second;
    }

    public function setHour($hour) {
        if ($hour >= 0 && $hour <= 23) {
            $this->hour = $hour;
        } else {
            throw new Exception("Hour must be between 0 and 23.");
        }
    }

    public function setMinute($minute) {
        if ($minute >= 0 && $minute <= 59) {
            $this->minute = $minute;
        } else {
            throw new Exception("Minute must be between 0 and 59.");
        }
    }

    public function setSecond($second) {
        if ($second >= 0 && $second <= 59) {
            $this->second = $second;
        } else {
            throw new Exception("Second must be between 0 and 59.");
        }
    }

    public function __toString() {
        return sprintf("%02d:%02d:%02d", $this->hour, $this->minute, $this->second);
    }

    public function nextSecond() {
        $this->second++;
        $this->normalizeTime();
        return $this;
    }

    public function nextMinute() {
        $this->minute++;
        $this->normalizeTime();
        return $this;
    }

    public function nextHour() {
        $this->hour++;
        $this->normalizeTime();
        return $this;
    }

    public function previousSecond() {
        $this->second--;
        $this->normalizeTime();
        return $this;
    }

    public function previousMinute() {
        $this->minute--;
        $this->normalizeTime();
        return $this;
    }

    public function previousHour() {
        $this->hour--;
        $this->normalizeTime();
        return $this;
    }

    private function normalizeTime() {
        if ($this->second >= 60) {
            $this->second -= 60;
            $this->minute++;
        }
        if ($this->second < 0) {
            $this->second += 60;
            $this->minute--;
        }
        if ($this->minute >= 60) {
            $this->minute -= 60;
            $this->hour++;
        }
        if ($this->minute < 0) {
            $this->minute += 60;
            $this->hour--;
        }
        if ($this->hour >= 24) {
            $this->hour -= 24;
        }
        if ($this->hour < 0) {
            $this->hour += 24;
        }
    }
}

$time = new MyTime(12, 59, 59);

// Вывод времени
echo $time . " "; // Выведет "12:30:45 "

// Перемещение на следующую секунду
$time->nextSecond();
echo $time; 
?>
