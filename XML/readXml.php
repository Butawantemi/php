<?php
$xml = simplexml_load_file("note.xml") or die("Error: Cannot create object");
echo $xml->to . "\n";
echo $xml->from . "\n";
echo $xml->heading . "\n";
echo $xml->body . "\n";