<?php
 include 'register.php';
 
 $sql="SELECT * FROM student";
 $query=mysqli_query($connection,$sql);

?>


<div class="car">
  <?php
  if(mysqli_num_rows($query)>0){
    while($row=mysqli_fetch_array($query)){
 
    
  ?>
    <img src="image/<?php echo $row['image'];?>" height="200px" width="200px">
    <table>
        <tr class="city">
        <td>City</td>
        <td><?php echo $row['city'];?></td>
      </tr>
      <tr>
      <td>Year</td>
      <td><?php echo $row['year'];?></td>
      </tr>
      <tr>
      <td>Model</td>
        <td><?php echo $row['model'];?></td>
      </tr>
      <tr>
        <td><button class="edit"> <a href="home.php?act=edit" style=text-decoration:none;color:#267191; >EDIT</a></button></td>
        <td><button class="DELETE">DELETE</button></td>
      </tr>
    </table>
   <?php
   }
  }
   ?> 
  </div>
