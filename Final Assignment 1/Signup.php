<?php include 'controllers/Usercontrollers.php'; ?>
<html>
	<head></head>
	<title>SignUp</title>
	<body>
		<form action="" method="post">
		<h1>Sign Up</h1>
    <h5><?php echo $err_db;?></h5>
    <p>Name:<input type="text" name="name" value="<?php echo $name; ?>">

    <span> <?php echo $err_name;?> </span></p>
		<p>Username:<input type="text" name="uname" value="<?php echo $uname; ?>">
		<span> <?php echo $err_uname;?> </span></p>
    <p>Email:<input type="text" name="email" value="<?php echo $email; ?>">
    <span> <?php echo $err_email;?> </span></p>
		<p>Password:<input type="password" name="password" value="<?php echo $password; ?>">
		<span> <?php echo $err_password;?> </span></p>
    <p><input type="submit" name="signup" value="signup"></p>
		</form>
	</body>
</html>
