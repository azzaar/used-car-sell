<?php

$host="localhost";
$username="root";
$password="";
$db="my_db";

$connection=mysqli_connect($host,$username,$password,$db);
if ($connection) {
    echo "<script>alert('data connected')</script>";
  }else{
      echo "<script>alert('Error')</script>";
  }

//end










?>