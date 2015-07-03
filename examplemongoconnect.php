<?php

// connect
$m =  new MongoClient('mongodb://kenwei:A126610276@ds029541.mongolab.com:29541/kenwei');


// select a database
$db = $m->kenwei;


// select a collection (analogous to a relational database's table)


$collection = $db->cartoons;

// add a record
//$document = array( "title" => "Calvin and Hobbes", "author" => "Bill Watterson" );
//$collection->insert($document);

// add another record, with a different "shape"
//$document = array( "title" => "XKCD", "online" => true );
//$collection->insert($document);

// find everything in the collection
$cursor = $collection->find();



// iterate through the results
foreach ($cursor as $document) {
    echo "this is title :" . $document["title"] . "\n<br>";
	
	echo "this is  product :"  . $document["product"] . "\n<br>";
	echo "<br>";
}

?>