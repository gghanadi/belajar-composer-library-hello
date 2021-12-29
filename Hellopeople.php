<?php
/*
    ini adalah lanjutan materi dari autoload
    disini jadi klao misal kita punya banyak class atau data oop nahh disini kita hanya butuh satu require_once 
    nanti composer yang akan mencari file nya tinggal kita declare use di bawah saja
*/
require_once __DIR__ . "/vendor/autoload.php";

use GannetsGhanadi\Data\People;

$people = new People("Agus");
$people->sayHallo("gannets");