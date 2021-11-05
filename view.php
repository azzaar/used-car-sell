<?php
 include 'register.php';
 
 $sql="SELECT * FROM student";
 $query=mysqli_query($connection,$sql);

?>


<div class="view">
  <?php
  if(mysqli_num_rows($query)>0){
    while($row=mysqli_fetch_array($query)){
 
    
  ?>
    <img src="image/<?php echo $row['image'];?>" height="200px" width="200px">
    <table>
        <tr class="city">
        <td>City:</td>
        <td><?php echo $row['city'];?></td>
      </tr>
      <tr>
      <td>Year:</td>
      <td><?php echo $row['year'];?></td>
      </tr>
      <tr>
      <td>Model:</td>
        <td><?php echo $row['model'];?></td>
      </tr>
 
    </table>
    <button> <a href="home.php?act=edit" style=text-decoration:none;color:#267191; >Contact Seller</a></button></td>
   <?php
   }
  }
   ?> 
  </div>