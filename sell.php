<?php
  include 'register.php';

  if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];
    $year=$_POST['year'];
    $make=$_POST['make'];
    $model=$_POST['model'];
    $kms=$_POST['kms'];
    $own=$_POST['own'];
    $price=$_POST['price'];
    $fuel=$_POST['fuel'];
    $color=$_POST['color'];
    $reg=$_POST['registertion'];
    $ins=$_POST['insurance'];
    $why=$_POST['why'];
    $image=$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"image/".$image);


  $sqli="INSERT INTO student(name,email,phone,city,year,make,model,kms,own,price,image,type,color,regnum,insurance,why) VALUES('$name','$email','$phone','$city','$year','$make','$model','$kms','$own','$price','$image','$fuel','$color','$reg','$ins','$why')";
  $results=mysqli_query($connection,$sqli);

  if ($results){
    echo "<script>alert('insert')</script>";
  }else{
    echo "<script>alert('Error')</script>";
  }
}   
?>




<div class="sell">
  <h1>Details</h1>
  <form method="post" action="" name="sellform" enctype="multipart/form-data" >
    <table>
      <tr>
       <td>Name :</td>
       <td><input type="text" name="name"required ></td>
      </tr>

      <tr>
       <td>Mobile Number:</td>
       <td><input type="tel" name="phone" required></td>
      </tr>

      <tr>
        <td>Email id:</td>
        <td><input type="email" name="email"required ></td>
      </tr>

      <tr>
          <td>City</td>
          <td><input type="text" name="city" required></td>
      </tr>

      <tr>
         <td>Mfg Year</td>
         <td><input type="text" name="year" required></td>
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
         <td><input type="text" name="model" required></td>
      </tr>
        
      <tr>
          <td>KMs Driven</td>
          <td><input type="text" name="kms" required></td>
      </tr>

      <tr>
         <td>Num.of Owners</td>
         <td><input type="text" name="own" required></td>
      </tr>

      <tr>
          <td>Expected Price</td>
          <td><input type="text" name="price" required></td>
      </tr>

      <tr>
          <td>Upload Image</td>
          <td><input type="file" name="file" required></td>
      </tr>

      <tr>
          <td>Fuel Type</td>
          <td><select name="fuel" required>
          <option>select</option>
          <option>Petrol</option>
          <option>Diesel</option>
          </select> </td>      
      </tr>

        
      <tr>
       <td>Color</td>
       <td>
        <select name="color" required>
        <option>select</option>
        <option>Red</option>
        <option>Blue</option>
        </select>
       </td>     
      </tr>

      <tr>
          <td>Registration Number</td>
          <td><input type="tel" name="registertion" required></td>
      </tr>

      <tr>
          <td>  Insurance Valid Till</td>
          <td><input type="text" name="insurance" required ></td>
      </tr>

      <tr>
          <td>Tell the buyer why you should buy your car</td>
          <td><textarea name="why" required></textarea></td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" value="POST"> </td>
      </tr>  
   </table>
  </form> 
  </div>