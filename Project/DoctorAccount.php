<?php
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
	$confirmpassword="";
	$err_confirmpassword="";
  $birthdate = "";
  $err_birthdate = "";
  $birthmonth = "";
  $err_birthmonth = "";
  $birthyear = "";
  $err_birthyear = "";
	$gender="";
	$err_gender="";
  $email = "";
  $err_email = "";
  $phone = "";
  $err_phone = "";
  $gender = "";
  $address = "";
  $err_address = "";

	$hasError=false;

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"])<= 4)
	{
		$hasError = true;
		$err_name = "Name must be greater than 4 characters";
	}
		else{
			$name = $_POST["name"];
		}
		if(empty($_POST["username"])){
			$hasError = true;
			$err_username="Username Required";
		}
		else if(strlen($_POST["username"])<= 5)
	{
		$hasError = true;
		$err_username = "User Name must be greater than 5 characters";
	}
		else{
			$username = $_POST["username"];
		}
    if(empty($_POST["password"])){
			$hasError = true;
			$err_password="Password Required";
		}
		else{
			$password = $_POST["password"];
		}

    if(empty($_POST["confirmpassword"])){
			$hasError = true;
			$err_confirmpassword="Password Required";
		}
		else if ($_POST["password"]!=$_POST["confirmpassword"]) {
			$hasError=true;
			$err_confirmpassword="incorrect password";
		}
		else{
			$confirmpassword = $_POST["confirmpassword"];
		}
    if (!isset($_POST["birthdate"])){
			$hasError = true;
			$err_birthdate="Date Required";
		}
		else{
			$birthdate = $_POST["birthdate"];
		}
    if (!isset($_POST["birthmonth"])){
			$hasError = true;
			$err_birthmonth="Month Required";
		}
		else{
			$birthmonth = $_POST["birthmonth"];
		}
    if (!isset($_POST["birthyear"])){
			$hasError = true;
			$err_birthyear="Year Required";
		}
		else{
			$birthyear = $_POST["birthyear"];
		}
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
    if(empty($_POST["email"])){
			$hasError = true;
			$err_email="Email Required";
		}
		else if( strpos($_POST["email"],"@") ){
				$email =($_POST["email"]);
}
		else{
				$hasError = true;
	$err_email ="Email should have @ ";
}

    if(empty($_POST["phone"])){
			$hasError = true;
			$err_phone="Phone Required";
		}
		else if(strlen($_POST["phone"]) >= 12)
	{
		$hasError = true;
		$err_phone = "Phone number must be lower than or equal 12 digits";
	}
		else{
			$phone = $_POST["phone"];
		}
    if(empty($_POST["address"])){
			$hasError = true;
			$err_address="Address Required";
		}
		else{
			$address = $_POST["address"];
		}

		if(!$hasError){
			echo "<h1>Doctor Account submitted</h1>";
			echo $_POST["name"]."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
      echo $_POST["confirmpassword"]."<br>";
      echo $_POST["birthdate"]."<br>";
	    echo $_POST["birthmonth"]."<br>";
	    echo $_POST["birthyear"]."<br>";
			echo $_POST["gender"]."<br>";
      echo $_POST["email"]."<br>";
	    echo $_POST["phone"]."<br>";
	    echo $_POST["address"]."<br>";
			}
		}


?>
<html>
	<head></head>
	<body>
    <div>
      <ul>
        <li ><a href="DoctorAccount.php">Doctor Account </a></li>
        <li><a href="DoctorInformation.php">Doctor Info</a></li>
        <li><a href="PublicRelease.php">Public Release </a></li>
				<li><a href="VaccinationUpate.php">Vaccination update</a></li>
        <li><a href="Vaccine Information.php">Vaccination Information</a></li>
      </ul>
    </div>
		<form action="" method="post">
		<fieldset>
      <p align="center">
			<table>
				<tr>
					<td colspan="4" align="center"><img src="download.jpg" alt=""> </td>
				</tr>
        <tr>
          <td colspan="2" align="center"><h2><u>Doctor Account</u></h2></td>
        </tr>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter Your name"> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				<tr>
					<td>Username</td>
					<td>: <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">  </td>
					<td><span> <?php echo $err_username;?> </span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>: <input type="password" name="password" placeholder="Password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
				</tr>
        <tr>
					<td>Confirm Password</td>
					<td>: <input type="password" name="confirmpassword" placeholder="">  </td>
					<td><span> <?php if ($password==$confirmpassword) {
						echo $err_confirmpassword;
					}
					else {
						echo "Wrong Password";
					}?> </span></td>
				</tr>


          <tr><td>Birth Date
					</td>
					<td>
					:<select name="birthdate">
					 <option selected disabled >--Day--</option>
					<?php for($i=1;$i<=31;$i++) echo "<option>$i</option>"; ?>
					</select>
					<span><?php echo $err_birthdate;?></span>

					<select name="birthmonth">
					 <option selected disabled >--Month--</option>
					<option>January</option>
					<option>February</option>
					<option>March</option>
					<option>April</option>
					<option>May</option>
					<option>June</option>
					<option>July</option>
					<option>August</option>
					<option>September</option>
					<option>October</option>
					<option>November</option>
					<option>December</option>
					</select>
					<span><?php echo $err_birthmonth;?></span>


					<select name="birthyear">
					 <option selected disabled >--Year--</option>
					<?php for($i=1990;$i<=2021;$i++) echo "<option>$i</option>"; ?>
					</select>
					<span><?php echo $err_birthyear;?></span>
					</td> </tr>


          <tr>
					<td>Gender</td>
					<td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
					<td><span> <?php echo $err_gender;?> </span></td>
				</tr>
        <tr>
	<td>Email</td>
	<td>: <input name="email" value="<?php echo $email; ?>" type="text" placeholder="Enter email">
	<span><?php echo $err_email; ?></span></td>
	</tr>
	<tr>
	<td>Phone</td>
	<td>: <input name="phone" value="<?php echo $phone; ?>" type="text" placeholder="Enter phone number">
	<span><?php echo $err_phone; ?></span></td>
	</tr>
	<tr>
	<td>Address</td>
	<td>: <input name="address" value="<?php echo $address; ?>" type="text" placeholder="Street Address">
	<span><?php echo $err_address; ?></span></td>
	</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>

				</tr>
			</table>
      </p>
		</fieldset>
		</form>
	</body>
</html>
