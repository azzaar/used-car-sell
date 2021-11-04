<?php
 include 'register.php';

 
 if (isset($_POST['submit'])){
   $name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['vpassword'];
   $address=$_POST['address'];
   $zip=$_POST['zip'];
   $tel=$_POST['tel'];
 
   $sql="INSERT INTO reg(name,email,password,address,zipcode,phone)VALUES ('$name','$email','$password','$address','$zip','$tel')";
    $result=mysqli_query($connection,$sql);

    if ($result) {
      header("Location:index.php");
    }else{
        echo "<script>alert('Error')</script>";
    }
  } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="register.css" rel="stylesheet">
</head>
<body>
  <div class="register">
   <h1>REGISTER</h1>
    <form name="formname" action="" method="post" onsubmit="return validate()">
     <table>
      <tr>
       <td>Name :</td>
       <td><input type="text" name="name" ></td>
       <td id="name" class="id"></td>
      </tr>
          
      <tr>
       <td>Address</td>
       <td><input type="text" name="address" ></td>
       <td id="address" class="id"></td>
      </tr>
          
      <tr>
       <td>Zip code</td>
       <td><input type="text" name="zip" ></td>
       <td id="zip" class="id"></td>
      </tr>
          
      <tr>
        <td>State</td>
        <td>
        <select name="state" >
        <option>select your state</option>
        <option>Kerala</option>
        <option>Tamilnadu</option>
        <option>Karnataka</option>
        <option>Punjab</option>
        <option>Goa</option>
        </select>
        </td>
      </tr>

      <tr>
       <td>City</td>
       <td>
        <select name="city" >
        <option>select your city</option>
        <option>TVM</option>
        <option>Kollam</option>
        <option>Pathanamthitta</option>
        <option>Alappuazha</option>
        <option>Kottyam</option>
        </select>
       </td>
      </tr>
             
      <tr>
        <td>Phone </td>
        <td><input type="tel" name="tel" ></td>
        <td id="phone" class="id"></td>
      </tr>
          
      <tr>
      <td>Email </td>
       <td><input type="email" name="email" required></td>
       <td id="email" class="id"></td>
      </tr>
          
      <tr>
       <td>Password :</td>
       <td><input type="password" name="password" required></td>
       <td id="pass" class="id"></td>
      </tr>
          
      <tr>
       <td>Verify Password :</td>
       <td><input type="password" name="vpassword"></td>
       <td id="vpass" class="id"></td>
      </tr>

      <tr>
       <td id="demo" ></td>
       </tr>
      <tr>
        <td><input type="submit" name="submit" value="Register" ></td>
        <td><button class="btn" onclick="window.location.href='index.php#login'">Login</button></td>
      </tr>
    </table>
   </form>  
  </div>

 <script>
  function validate(){
    var pass=document.formname.password.value;
    var vpass=document.formname.vpassword.value;
    var message=document.getElementById("demo");
    if(pass.length >8){
       if(pass!==vpass){
        message.innerHTML = "Password dismatched";
        return false;
       }
             
    else if(pass.length<8){
        message.innerHTML = "atleast 8 character";
        document.formname.password.focus();
        return false;
      }
    }
  }


 </script>
</body>
</html>