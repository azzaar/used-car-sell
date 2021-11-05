<?php session_start();

?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="home.css" rel="stylesheet">
</head>
<body>
  <div class="index">
  <?php
     include 'menu.php';
  ?> 
  

<?php
  if(isset($_REQUEST['act'])){
					
		$act = $_REQUEST['act'];
					
		include("process.php");
					
	}
	else{
    include("homepage.php");
  }
?>
  
</body>
</html>