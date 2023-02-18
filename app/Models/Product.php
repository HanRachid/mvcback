<?php

namespace App\Models;

class Product
{
    protected $name;

    protected $SKU;

    protected $price;


    protected $size;



    protected $weight;


    protected $height;

    protected $width;

    protected $length;
    protected $type;



    public function __construct($name, $type, $SKU, $price, $size, $weight, $height, $width, $length)
    {
        $this->name = $name;
        $this->type=$type;
        $this->SKU = $SKU;
        $this->price = $price;
        $this->size = $size;
        $this->weight = $weight;
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }

    public function toArray()
    {
        return get_object_vars($this);
    }
}
