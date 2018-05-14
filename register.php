<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Registration System Using PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>
	
	<form method="post" action="register.php">
	<!--display validation errors here -->
	<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" name="register" class="btn">Register</button>
			<a href="home.php" style="text-decoration: none; color: #fff; font-family: arial; font-size: 15px; background: #5F9EA0; margin-top:2px; padding: 10.5px 10px; border-radius: 4px;">Back</a>
		</div>
		<p>
			Sudah menjadi anggota? <a href="login.php">Login</p>
	</form>
		
</body>
</html> 