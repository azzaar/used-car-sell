<?php
include 'register.php';
 session_start();

if (isset($_POST['submit'])){
 $password=$_POST['passwords'];
 $name=$_POST['name'];

 $sqls= "SELECT * FROM reg WHERE name='$name' AND password='$password'";
 $query=mysqli_query($connection,$sqls);

   if ($query->num_rows >0){
    $_SESSION['username']=$name;   
    header("Location:home.php");
   }else{
    echo "<script>alert('email and password is wrong')</script>";
   }
}

?>
<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSIGHNMENT</title>
    <link rel="stylesheet"href="index.css">
</head>
<body>
  

    <div class="content">
        <ul>
            <li><a href="#home">HOME</a></li>
            <li><a href="#login">LOGIN</a></li>
            <li><a href="registers.php">REGISTER</a></li>
            <li><a href="#footer">ABOUT</a></li>
        </ul>
      <div class="heading" id="home">
        <p class="f">WELCOME</p>
        <p class="s">USED CARS </p>
        <button class="btn" onclick="window.location.href='registers.php'">Register</button>
      </div>
    </div>

    <div class="main" id="login">
        <div class="enq">
            <h4> LOGIN</h4>
            <form method="post" action="" name="formname">
             <input type="text" placeholder="Name" name="name" required>
             <input type="password" placeholder="Password" name="passwords" required>
             <input type="submit" name="submit" value="LOGIN"> 
            </form>
        </div>
    </div>
    <div  id="footer" class="footer">
        <p>All Rights Reserved | Copyright used car  2021
        </p>
    </div>

    
</body>
</html>