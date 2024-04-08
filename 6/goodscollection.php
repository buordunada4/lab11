<?php

class GoodsCollection
{
    public $collection = [];

    public function show()
    {
        foreach ($this->collection as $item) {
            echo "Title: {$item->title}, Manufacturer: {$item->manufacturer}, Price: {$item->price}, Color: {$item->color}<br>";
        }
    }

    public function push($goods)
    {
        $this->collection[] = $goods;
    }

    public function add($title, $manufacturer, $price, $color)
    {
        $goods = new Goods($title, $manufacturer, $price, $color);
        $this->push($goods);
    }

    public function item($index)
    {
        return $this->collection[$index];
    }
    
}
