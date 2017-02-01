<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->helper('url'); 

?>
</head>
<body>
<center>
<h2>Add Details</h2>
<table>
<tr></tr>
 <form action="<?php echo base_url();?>index.php/Welcome/submit_details" method="post">
 <tr><td>Name</td><td><input type="text" name="uname"></td></tr>
 <tr><td>mob no</td><td><input type="text" name="uphone"></td></tr>
 <tr><td>email</td><td><input type="text" name="uemail"></td></tr>
 <tr><td>male</td><td><input type="radio" name="ugender" value="male"></td>
 <td>female</td><td><input type="radio" name="ugender" value="female"></td></tr>
 <tr><td>hobbies</td><td>Music <input type="checkbox" name="uhobbies[]" value="music"></td></tr>
 <tr><td></td><td>Reading<input type="checkbox" name="uhobbies[]" value="reading"></td></tr>
 <tr><td></td><td>Browsing<input type="checkbox" name="uhobbies[]" value="browsing"></td></tr>
 <tr><td></td><td>Playing<input type="checkbox" name="uhobbies[]" value="playing"></td></tr>
 <tr><td>Country</td><td><select name="country">
 <option value="india">India</option>
 <option value="pakistan">Pakistan</option>
 <option value="usa">USA</option>
  </select></td></tr>
 <tr><td> <input type="submit" value="save" style="background-color: blue; color:white;"></td></tr>
 </table>
  </form>
  <?php
  if(isset($user_detail))
  {
  	
  ?>
  <h2>User details</h2>
  <table border="1">
  <tr><th>sl No</th><th>Name</th><th>Phone</th><th>Email</th><th>Action</th></tr>
  <?php
  $i=1;
  foreach ($user_detail as $user) {
  echo "<tr>";
  echo "<td>".$i."</td>";	
  echo "<td>".$user['name']."</td>";
  echo "<td>".$user['phone']."</td>";
  echo "<td>".$user['email']."</td>";
  ?>
  <td><a href="<?php echo base_url();?>index.php/Welcome/delete_details?id=<?php echo $user['id'] ?> ">delete</a> 
  <a href="<?php echo base_url();?>index.php/Welcome/edit_details?id=<?php echo $user['id'] ?> ">edit</a></td>
  <?php
  echo "</tr>";
  $i++;
   }
   ?>
  	
  </table>
<?php
  }
  ?>
</center>
</body>
</html>