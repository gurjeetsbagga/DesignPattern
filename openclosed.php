<?php

interface Shape{
    public function getArea();
}


class AreaCalculator
{
    public function __construct(public Shape $shape)
    {
    }

    public function findCalculatedArea()
    {
        return $this->shape->getArea();
    }
}

class Square implements Shape
{

    public function __construct(private int $length, private int $breadth)
    {
    }

    public function getArea()
    {
        return $this->length * $this->breadth;
    }
}

class Rectangle implements Shape
{
    public function __construct(private int $length, private int $breadth)
    {
    }

    public function getArea(){
        return 2*($this->length + $this->breadth);
    }
}

$square = new Square(4,5);
$rectangle = new Rectangle(4,5);

$objRec =  new AreaCalculator($rectangle);
$objSqu =  new AreaCalculator($square);

echo "Rectangle: ". $objRec->findCalculatedArea();
echo "\nSquare: ".$objSqu->findCalculatedArea();
echo "\n";
