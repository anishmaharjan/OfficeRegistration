<html>
<head>
	<title>Login</title>
</head>
<body>

	<?php echo form_open('main/login_validation'); 
	echo validation_errors();
	//echo $id . "<br>";   ?>
	
UserID		<input type="text" name="username" placeholder="Username ID" value="<?php echo $id; ?>" >
<br>
Password: 	<input type="password" autofocus name="mpassword" required placeholder="Password" >
<?php 
	echo form_submit('login_submit','Enter'); 
	echo form_close(); 




?>


</body>
</html>