<?php
/*
    disini namespace nya harus sama di composer.json yang bagian autoload nya
    dan nama class nya(besar kecil tulisan) harus sama dengan nama file nya
*/

namespace GannetsGhanadi\Data;


class People{

    public function __construct(private string $name){
        
    }

    public function sayHallo(string $name){
        echo "Hallo $name, my name is $this->name";
    }
}
