<?php
  include 'register.php';
  if (isset($_POST['submit'])){
   $name=$_POST['name'];
   $email=$_POST['email'];  

    $sqli="INSERT INTO sell(city,name,email)VALUES('$name','$email')";
    $results=mysqli_query($connection,$sqli);

    if ($results) {
      echo "<script>alert('insert')</script>";
    }else{
      echo "<script>alert('Error')</script>";
    }
  }  
?>




<div class="sell">
  <h1>Details</h1>
  <form method="post" action="" name="sellform">
    <table>
      <tr>
       <td>Name :</td>
       <td><input type="text" name="name" ></td>
      </tr>

      <tr>
       <td>Mobile Number:</td>
       <td><input type="tel" name="phone" ></td>
      </tr>

      <tr>
        <td>Email id:</td>
        <td><input type="email" name="email" ></td>
      </tr>

      <tr>
          <td>City</td>
          <td><input type="text" name="city"></td>
      </tr>

      <tr>
         <td>Mfg Year</td>
         <td><input type="text" name="year"></td>
      </tr>

      <tr>
       <td>Make</td>
       <td>
        <select name="make">
        <option>select</option>
        <option>susuki</option>
        <option>tata</option>
        </select>
        </td>
      </tr>
            
      <tr>
         <td>Model</td>
         <td><input type="text" name="model"></td>
      </tr>
        
      <tr>
          <td>KMs Driven</td>
          <td><input type="text" name="kms"></td>
      </tr>

      <tr>
         <td>Num.of Owners</td>
         <td><input type="text" name="own"></td>
      </tr>

      <tr>
          <td>Expected Price</td>
          <td><input type="text" name="Price"></td>
      </tr>

      <tr>
          <td>Upload Image</td>
          <td><input type="file" name="file"></td>
      </tr>

      <tr>
          <td>Fuel Type</td>
          <td><select name="fuel">
          <option>select</option>
          <option>Petrol</option>
          <option>Diesel</option>
          </select> </td>      
      </tr>

        
      <tr>
       <td>Color</td>
       <td>
        <select name="color">
        <option>select</option>
        <option>Red</option>
        <option>Blue</option>
        </select>
       </td>     
      </tr>

      <tr>
          <td>Registration Number</td>
          <td><input type="tel" name="registertion"></td>
      </tr>

      <tr>
          <td>  Insurance Valid Till</td>
          <td><input type="text" name="insurance" ></td>
      </tr>

      <tr>
          <td>Tell the buyer why you should buy your car</td>
          <td><textarea name="why"></textarea></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" value="POST"> </td>
      </tr>  
   </table>
  </form> 
  </div>