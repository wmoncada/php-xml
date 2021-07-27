<?php

$xml = simplexml_load_file("books.xml") or die("Can't load file");

foreach($xml as $row) {
    //print_r($row);
    echo "ID: {$row[0]["id"]} BOOK NAME: {$row->name} PRICE:  {$row->price} <br>";
}