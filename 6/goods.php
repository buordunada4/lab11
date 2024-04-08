<?php

class Goods
{
    public $title;
    public $manufacturer;
    public $price;
    public $color;

    public function __construct($title, $manufacturer, $price, $color)
    {
        $this->title = $title;
        $this->manufacturer = $manufacturer;
        $this->price = $price;
        $this->color = $color;
    }

    public function show()
    {
        echo "Title: {$this->title}, Manufacturer: {$this->manufacturer}, Price: {$this->price}, Color: {$this->color}<br>";
    }

    public function export()
    {
        return [
            'title' => $this->title,
            'manufacturer' => $this->manufacturer,
            'price' => $this->price,
            'color' => $this->color
        ];
    }
}
