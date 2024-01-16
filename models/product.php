<?php

/* classe modello */
class Product
{
    public $name;
    public $price;
    public $category;
    public $is_available;

    public function __construct(string $_name, float $_price, string $_category, bool $_is_available)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
        $this->is_available = $_is_available;
    }

    public function getProductDetails()
    {
    }
}

/* classe specifica per cani */
class DogProduct extends Product
{
    public $is_for_dogs;

    public function __construct($_name, $_price, $_category, $_is_available, $_is_for_dogs)
    {
        parent::__construct($_name, $_price, $_category, $_is_available);
        return $this->is_for_dogs = $_is_for_dogs;
    }
}

/* classe specifica per gatti */

class CatProduct extends Product
{
    public $is_for_cats;

    public function __construct($_name, $_price, $_category, $_is_available, $_is_for_cats)
    {
        parent::__construct($_name, $_price, $_category, $_is_available);
        return $this->is_for_cats = $_is_for_cats;
    }
}

/* classe per tipi specifici di prodotti */

/* cibo */
class Food extends Product
{
    public $calories;

    public function __construct($_name, $_price, $_category, $_is_available, $_calories)
    {
        parent::__construct($_name, $_price, $_category, $_is_available);
        $this->calories = $_calories;
    }
}

/* giochi */

class Game extends Product
{
    public $type;
    public $material;
    public $is_for_cats;

    public function __construct($_name, $_price, $_category, $_is_available, $_type, $_material, $_is_for_cats)
    {
        parent::__construct($_name, $_price, $_category, $_is_available);
        $this->type = $_type;
        $this->material = $_material;
        $this->is_for_cats = $_is_for_cats;
    }
}

/* cucce */

class Shelter extends Product
{
    public $size;
    public $material;
    public $is_for_dogs;

    public function __construct($_name, $_price, $_category, $_is_available, $_size, $_material, $_is_for_dogs)
    {
        parent::__construct($_name, $_price, $_category, $_is_available);
        $this->size = $_size;
        $this->material = $_material;
        $this->is_for_dogs = $_is_for_dogs;
    }
}
