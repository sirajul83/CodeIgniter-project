<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link href="<?php echo base_url();?>assets/">
</head>
<body>

	<form action="<?php echo base_url()?>/registration/validation" method="POST">
	<table>
		<tr><input type="text" name="name" placeholder="Name"><br><br></tr>
		<span><?php echo form_error('name'); ?></span>
		<tr><input type="text" name="user_name" placeholder="User Name"><br><br></tr>
		<span><?php echo form_error('user_name'); ?></span>
		<input type="text" name="email" placeholder="Email"><br><br>
		<span><?php echo form_error('email'); ?></span>
		<input type="password" name="pass" placeholder="password"><br><br> 
		<span><?php echo form_error('pass'); ?></span>
		<input type="submit" name="submit">
		<input type="reset" name="reset">
	</table>
	</form>
	<span><?php if($this->uri->segment(2)=='inserted'){
		echo "Data inserted";
	}?></span>
</body>
</html>