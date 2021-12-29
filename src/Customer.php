<?php

namespace Gannetsghanadi\Belajar;

class Customer {

    public function __construct(private string $name){}

    public function sayHello(string $name){
        return " Hallo $name, my name is $this->name";
    }
}