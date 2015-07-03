<!--connect to mongoDB, this should be modified if needed-->
<?php 
//public MongoClient::__construct (
  //[ string $server = "mongodb://localhost:27017" [, array $options = array("connect" => TRUE) [, array $driver_options ]]] )
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
<div id="header"><span><br>SELECT / MongoDB</span></div>
<div id="container">
<form action="<?php $_PHP_Klarie ?>" method="post"><!--action destination should be modified-->
<select name="Choice" id="Choice" class="selectpicker" data-style="btn-info">
<option value="product">Product</option>
<option value="CN">Customer Name</option>
<option value="Date">Date</option>
</select>
</form>
</div>
<script type="text/javascript">
       $('.selectpicker').selectpicker();
        $('.selectpicker').selectpicker({
          style: 'btn-info',
          size: 4
        });
</script>

<!--fade
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    x-result here-x
    </div>
  </div>
</div>
-->
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
  </body>
</html>