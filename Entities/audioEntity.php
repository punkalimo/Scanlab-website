<?php

class audioEntity {
    public $id;
    public $name;
    public $price;
    public $image;
    public $description;
    public $type;
function __construct($id, $name, $price, $image, $description, $type) {
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
    $this->description = $description;
    $this->type = $type;
}
}

