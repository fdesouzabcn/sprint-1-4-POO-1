<?php

// ------------------------------------------------------------------
// --- Exercise 2: Calculate Area using Inheritance (subclasses) ----
//-------------------------------------------------------------------

declare(strict_types=1);

//Parent Class 
class Shape
{
    public float  $lenght;
    public float  $width;
    
    // Parent Class :: Constructor to set length and width
    public function __construct(float $lenght, float $width) {
        $this->lenght  = $lenght;
        $this->width  = $width;
    }
}

// Inheritance - Child Classes (Triangle and Rectangle) 

class Triangle extends Shape {
    // Method that calculate the area of a Triangle 
    public function calculateArea(): float {
        return ($this->width * $this->lenght) / 2;
    }
}

class Rectangle extends Shape {
    // Method that calculate the area of a Rectangle 
    public function calculateArea(): float {
        return $this->width * $this->lenght;
    }
}

//----------------------------
//------- Testing ------------
//----------------------------

$Triangle = new Triangle(10, 5);
echo "Triangle area: " . $Triangle->calculateArea() . "<br><br>";  // 25

$Rectangle = new Rectangle (10,5);
echo "Rectangle area: " . $Rectangle->calculateArea() . "<br><br>"; // 50

?>