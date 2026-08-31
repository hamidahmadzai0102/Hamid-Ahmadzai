<?php

// Name: Hamid Ahmadzai
// Lab_03 - PHP OOP Building Blocks
//
// Topics:
// 1. Class Constants
// 2. Static Properties and Static Methods
// 3. Abstract Classes and Abstract Methods


// TASK 1: CLASS CONSTANT

// A constant is a value that does not change during the program.
// I used MAX_BOOKS to store the maximum number of books allowed
// in the library.
//
// I used "const" to create the constant.
// To access it, I use the class name followed by ::
//
// Example: Library::MAX_BOOKS

class Library
{
    // This is a constant, so its value will stay 3.
    const MAX_BOOKS = 3;
}


// TASK 1 OUTPUT

// This prints the maximum number of books allowed.
echo "Task 1: Maximum books allowed: " . Library::MAX_BOOKS . PHP_EOL;


// TASK 2: STATIC PROPERTY AND STATIC METHOD

// A static property belongs to the class, not to one specific object.
//
// Here, I used $count to keep track of the number of students.
//
// A static method can also be called directly using the class name.
// I used addStudent() to increase the student count.
//
// self::$count means I am using the $count property from
// the same class.

class StudentCounter
{
    // The count starts from 0.
    public static $count = 0;

    // This method adds 1 to the student count each time
    // it is called.
    public static function addStudent()
    {
        self::$count++;
    }
}


// TASK 2 OUTPUT

// I call the method three times, so the count becomes 3.

StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();

echo "Task 2: Total students: " . StudentCounter::$count . PHP_EOL;


// TASK 3: ABSTRACT CLASS AND ABSTRACT METHOD

// An abstract class is a class that cannot be used to create
// an object directly.
//
// I created Vehicle as an abstract class because it is a general
// type of vehicle.
//
// The start() method is abstract, so the child classes have to
// create their own version of this method.
//
// Car and Bike both extend the Vehicle class.

abstract class Vehicle
{
    // This is an abstract method.
    // The child classes will decide what happens when the
    // vehicle starts.
    abstract public function start();
}


// CAR CLASS

// Car extends the Vehicle class.
// It has its own start() method.

class Car extends Vehicle
{
    // This is how a car starts.
    public function start()
    {
        echo "Car engine started";
    }
}


// BIKE CLASS

// Bike also extends the Vehicle class.
// It has its own start() method.

class Bike extends Vehicle
{
    // This is how a bike starts.
    public function start()
    {
        echo "Bike started";
    }
}


// TASK 3 OUTPUT

// Here I create objects for both Car and Bike.
// Then I call their start() methods.

$car = new Car();
$bike = new Bike();

echo "Task 3: ";

$car->start();

echo " | ";

$bike->start();

echo PHP_EOL;


// END OF LAB

// In this lab, I learned about:
//
// 1. Class Constants
//    - A constant stores a value that does not change.
//    - I accessed it using the class name and ::
//
// 2. Static Properties and Methods
//    - Static members belong to the class.
//    - They can be accessed without creating an object.
//
// 3. Abstract Classes and Methods
//    - An abstract class cannot be used to create an object directly.
//    - Child classes have to implement abstract methods.

?>


::
