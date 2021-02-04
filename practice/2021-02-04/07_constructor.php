<?php

// class
class BaseClass {
    /* 
    constructor :
    constructor is a kind of function.
    it is called automatically when we create a object of class
    when we want some things or variables pre initialized when we create object at that time constructors are useful.
    if constructor in base class are private then child class can not access it.
    */

    // parent class constructor
    public function __construct() {
        echo 'this is base class constructor<br>';
    }
}

// this class extends BaseClass
class SubClass extends BaseClass {
    // child class constructor
    function __construct(){
        // called parent class cinstructor from child class
        parent::__construct();
        echo 'this is sub class constructor';
    }
}

$b = new SubClass;

?>