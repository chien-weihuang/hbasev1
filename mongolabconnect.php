<!--connect to mongoDB, this should be modified if needed-->
<?php 


  //第一行未完成
	//$connection = new MongoClient('mongodb://kenwei:A126610276@ds029541.mongolab.com:29541/kenwei');
   // $connection = new Mongo('mongodb://kenwei93:A126610276@ds29541.mongolab.com:29541/db');
//    $database   = $connection->selectDB('kenwei');
//$database=$connection->kenwei;
    //$collection = $connection->$database->mongoClass;
//	 $collection = $database->selectCollection('mongoClass');
$m =  new MongoClient('mongodb://kenwei:A126610276@ds029541.mongolab.com:29541/kenwei');


// select a database
$db = $m->kenwei;


// select a collection (analogous to a relational database's table)


$collection = $db->mongoClass;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MongoDB</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-select.min.css" rel="stylesheet">
    <script src="js/modernizr.custom.js"></script>
    <script type="text/javascript" charset="Shift_JIS" src="http://chabudai.sakura.ne.jp/blogparts/honehoneclock/honehone_clock_tr.js">
</script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <style type="text/css">
  body {
    background-color: #cccccc;
  }
  #header {
    background-image: url("http://wallpoper.com/images/00/31/33/51/black-background_00313351.jpg");
    width:100%;
    height:200px;
    color:white; 
    text-align: center;
    vertical-align: middle ;
    font-size: 50px ;  
  }  
  #container { 
  margin-top:50px; 
  margin-left:40%; 
  margin-right:auto; 
  margin-bottom:20px; 
  border: 1px solid 000000 ; 
  }
  </style>
<?php 
if($_GET['Choice'] == "product" )
{
	echo "<br>product<br>";
	$cursor = $collection->find();
	//$document2 = array( "title" => "XKCD", "online" => true );
//$collection->insert($document2);
//$results = $database->$collection->find();

foreach ($cursor as $document) {
    echo "this is title :" . $document["title"] . "\n<br>";
	
	echo "this is  product :"  . $document["product"] . "\n<br>";
	echo "<br>";
}

?>






<?php
//echo $results;
echo "<br>Anchor";
//	 $results = $database->$collection->find()->sort(array('product'=> 1));
	// $results = $database->$collection->find($exist -> "product")->sort(array('product'=> 1));
//  $results = $database->$collection->find($exist=>"product")->sort(array('product'=> 1));
}
if($_GET['Choice'] == "CN" ){
	echo "<br>CN\n";
$cursor = $collection->find();
	//$results = $collection->find();
	

	//$cursor = $collection->find();
	foreach ($cursor as $document) {
    echo "this is title :" . $document["_id"] . "\n<br>";
	
	echo "this is  product :"  . $document["product"] . "\n<br>";
	echo "<br>";
}

//	$results = $database->$collection->find();
	
	//$results = $database->$collection->find('$exist'=>"customerName")->sort(array('customerName'=> 1));
}
if($_GET['Choice'] == "Date" )
	

{
	$cursor = $collection->find();
	echo "<br>Date\n";
	foreach ($cursor as $document) {
    echo "this is ID :" . $document["Date"] . "\n<br>";
	
	echo "this is  product :"  . $document["product"] . "\n<br>";
	echo "<br>";
}
}



 print("<br>here is php bottom");
?>
<script src="js/classie.js"></script>

<script type="text/javascript">
       $('.selectpicker').selectpicker();
        $('.selectpicker').selectpicker({
          style: 'btn-info',
          size: 4
        });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
  </body>
</html>