<?php include 'controllers/Usercontrollers.php'; ?>
<html>
	<head><title>Login</title></head>

	<body>
		<form action="" method="post">
		<h1>Login</h1>
    <h5><?php echo $err_db;?></h5>
					<p>Username:<input type="text" name="uname" value="<?php echo $uname; ?>">
					<span> <?php echo $err_uname;?> </span></p>
					<p>Password:<input type="password" name="password" value="<?php echo $password ?>">
					<span> <?php echo $err_password;?> </span></p>
          <p><input type="submit" name="btn_login" value="submit"></p>
		</form>
	</body>
</html>
