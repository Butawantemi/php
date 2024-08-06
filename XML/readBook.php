<?php
$xml = simplexml_load_file("book.xml") or die("Error: Cannot create object");
foreach($xml->children() as $book){
    echo $book->title . ", ";
    echo $book->author . ", ";
    echo $book->year . ", ";
    echo $book->price . ", " . "\n";
}