<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->helper('url'); 

?>
</head>
<body>
<center>
<h2>Update Details</h2>
<table>
<tr></tr>
 <form action="<?php echo base_url();?>index.php/Welcome/update_details" method="post">
 <tr><td>Name</td><td><input type="text" name="uname" value="<?php echo $user_detail[0]['name'] ?>"></td></tr>
 <tr><td>mob no</td><td><input type="text" name="uphone" value="<?php echo $user_detail[0]['phone'] ?>"></td></tr>
 <tr><td>email</td><td><input type="text" name="uemail" value="<?php echo $user_detail[0]['email'] ?>"></td></tr>
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
 <tr><td> <input type="submit" value="Update"></td></tr>
 </table>
 </center>
</body>
</html>