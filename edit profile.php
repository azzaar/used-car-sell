<?php
  include 'register.php';

 $sql="SELECT * FROM reg";
 $query=mysqli_query($connection,$sql);
 
 
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];
$zip=$_POST['zip'];
$tel=$_POST['tel'];
$state=$_POST['state'];
$city=$_POST['city'];
$id=$_POST['id'];

  $sqls="UPDATE reg SET name='$name',email='$email',password='$password',address='$address',zipcode='$zip',phone='$tel',state='$state',city ='$city' WHERE id='$id'";
  $querys=mysqli_query($connection,$sqls);

   if ($querys) {
  echo "<script>alert('Insert')</script>";
  }else{
    echo "<script>alert('Error')</script>";
  }
}
?>


<div class="edits">
<?php
  if(mysqli_num_rows($query)>0){
    if($row=mysqli_fetch_assoc($query)){
 
    
  ?>
  <h1>REGISTER</h1>


    <form name="formname" action="" method="post">
     <table>
      <tr>
       <td>Name :</td>
       <td><input type="text" name="name" value="<?php echo $row['name']; ?>" ></td>
       <td><input type="text" name="id" value="<?php echo $row['id']; ?>" style="display: none;"></td>
      </tr>

      <tr>
        <td>Phone </td>
        <td><input type="tel" name="tel" value="<?php echo $row['phone']; ?>" ></td>
        <td id="phone" class="id"></td>
      </tr>

      <tr>
       <td>Address</td>
       <td><input type="text" name="address" value="<?php echo $row['address']; ?>" ></td>
       <td id="address" class="id"></td>
      </tr>
          
      <tr>
       <td>Zip code</td>
       <td><input type="text" name="zip" value="<?php echo $row['zipcode']; ?>" ></td>
       <td id="zip" class="id"></td>
      </tr>
          
      <tr>
        <td>State</td>
        <td>
        <select name="state"value="<?php echo $row['state']; ?>" >
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
        <select name="city" value="<?php echo $row['city']; ?>">
        <option>select your city</option>
        <option>TVM</option>
        <option>Kollam</option>
        <option>Pathanamthitta</option>
        <option>Alappuazha</option>
        <option>Kottyam</option>
        </select>
       </td>
     </tr>  
     </table>
     <table>
     
          <h3>YOUR LOGIN INFORMATION </h3>
      
      <tr>
       <td><input type="radio"  onclick="show(0)">Password</td>
       <td><input type="password"  name="password" id="password" value="<?php echo $row['password']; ?>" style="display: none;"></td>
       </tr>


       <tr>
       <td><input type="radio" name="email" onclick="show(1)">Email</td>
       <td><input type="email" id="email"name="email" value="<?php echo $row['email']; ?>" style="display: none;" ></td>
       </tr>
     
          

      <tr>
        <td><input type="submit" name="submit" value="UPDATE" ></td>
      </tr>
    </table>
   </form> 

  <?php 
    }
} ?>

<script>
   function show(y){
       if(y==0){
           document.getElementById('password').style.display="block";
       } 
       if(y==1){
           document.getElementById('email').style.display="block";
       }   
   } 
</script>

</div>   