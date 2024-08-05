<?php
$xml = simplexml_load_file("book.xml") or die("Error: Cannot create object");
echo $xml->book[0]->title . "\n";
echo $xml->book[1]->title . "\n";