<?php


$xml = new DomDocument("1.0");
$xml->formatOutput = true;
// create root element
$books = $xml->createElement("books");

// Append created element to root element
// $parent -> appendChild(child)
$xml->appendChild($books);


// Creating childs of books
// first book
$book = $xml->createElement("book");
$book->setAttribute("id", 1);
$books->appendChild($book);

$name = $xml->createElement("name", "Java");
$book->appendChild($name);

$price = $xml->createElement("price", 200);
$book->appendChild($price);

// second book
$book = $xml->createElement("book");
$book->setAttribute("id", 2);
$books->appendChild($book);


$name = $xml->createElement("name", "PHP");
$book->appendChild($name);

$price = $xml->createElement("price", 300);
$book->appendChild($price);

$books->appendChild($book);

echo "<xmp>" . $xml->saveXML() . "</xmp>";