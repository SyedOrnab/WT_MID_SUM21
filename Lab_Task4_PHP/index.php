<?php
 $name= "";
 $err_name="";
 $username="";
 $err_username="";
 $password="";
 $err_password="";
 $confirmpassword="";
 $err_confirmpassword="";
 $email="";
 $err_email="";
 $phone="";
 $err_phone="";
 $address="";
 $err_address="";
 $birthdate="";
 $err_birthdate="";
 $gender="";
 $err_gender="";
 $bio="";
 $err_bio="";
 $hear="";
 $err_hear="";

 $hasError=false;

 $array=array(1,2,3,4,5,6,7,8,9,10);
 $array1=array(1,2,3,4,5,6,7,8,9,10);
 $array2=array(1,2,3,4,5,6,7,8,9,10);

 function hearExist($hears){
		global $hear;
		foreach($hear as $h){
			if($h == $hears)
      return true;
		}
		return false;
	}

if($_SERVER["REQUEST METHOD"]== "POST")
{
	if(empty($_POST["name"]))
	{
		$hasError=true;
		$err_name="Name Required";
	}
	elseif (strlen($_POST["name"]) <=2) {
		$err_name="Name must be greater than 2";
		$hasError=true;
	}
	else {
		$name=htmlspecialchars($_POST["name"]);
	}
	if(empty($_POST["username"]))
	{
		$hasError=true;
		$err_username="Name Required";
	}
	else {
		$username=$_POST["username"];
	}
	if(empty($_POST["password"]))
	{
		$hasError=true;
		$err_passwordname="Password Required";
	}
	else {
		$password=$_POST["password"];
	}
	if(empty($_POST["confirmpassword"]))
	{
		$hasError=true;
		$err_confirmpassword="Confirm Password Required";
	}
	else {
		$confirmpassword=$_POST["confirmpassword"];
	}
	if(empty($_POST["email"]))
	{
		$hasError=true;
		$err_email="Email Required";
	}
	else {
		$email=$_POST["email"];
	}
	if(empty($_POST["phone"]))
	{
		$hasError=true;
		$err_phone="Phone Required";
	}
	else {
		$phone=$_POST["phone"];
	}
	if(empty($_POST["address"]))
	{
		$hasError=true;
		$err_address="Address Required";
	}
	else {
		$address=$_POST["address"];
	}
	if(empty($_POST["birthdate"]))
	{
		$hasError=true;
		$err_birthdate="Birth Date Required";
	}
	else {
		$birthdate=$_POST["birthdate"];
	}
	if(!isset($_POST["gender"]))
	{
		$hasError=true;
		$err_gender="Gender Required";
	}
	else {
		$gender=$_POST["gender"];
	}
	if(!isset($_POST["hear"]))
	{
		$hasError=true;
		$err_hear="Checkbox Required";
	}
	else {
		$hear=$_POST["hear"];
	}
	if(empty($_POST["bio"]))
	{
		$hasError=true;
		$err_bio="Bio Required";
	}
	else {
		$name=$_POST["bio"];
	}
	if(!$hasError){
		echo "<h1>Form submitted</h1>";
		echo $_POST["name"]."<br>";
		echo $_POST["username"]."<br>";
		echo $_POST["password"]."<br>";
		echo $_POST["confirmpassword"]."<br>";
		echo $_POST["email"]."<br>";
		echo $_POST["phone"]."<br>";
		echo $_POST["address"]."<br>";
		echo $_POST["birthdate"]."<br>";
		echo $_POST["gender"]."<br>";
		echo $_POST["bio"]."<br>";
		$arr = $_POST["hear"];

		echo "Where did you hear about us?:<br>";
		foreach ($arr as $e) {
		  echo "$e<br>";
		}
	}

}
?>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form action="submit.php" method="post">
			<fieldset>
				<table>
					<tr>
						<td colspan="2" align="center"><h1>Club Member Registration</h1></td>
					</tr>
					<tr>
						<td align="right">Name</td>
						<td>: <input type="text" name="name" value=" <?php echo $name ?> "placeholder="Name"> </td>
						<td> <span><?php echo $err_name; ?></span></td>
					</tr>
					<tr>
						<td align="right">Userame</td>
						<td>: <input type="text" name="username" placeholder="Username"> </td>
						<td> <span><?php echo $err_username; ?></span></td>

					</tr>
					<tr>
						<td align="right">Password</td>
						<td>: <input type="text" name="password" placeholder="Password"> </td>
						<td> <span><?php echo $err_password; ?></span></td>

					</tr>
					<tr>
						<td align="right">Confirm Password</td>
						<td>: <input type="text" name="confirmpassword" placeholder="Confirmpassword"> </td>
						<td> <span><?php echo $err_confirmpassword; ?></span></td>

					</tr>
					<tr>
						<td align="right">Email</td>
						<td>: <input type="text" name="email" placeholder="Email"> </td>
						<td> <span><?php echo $err_email; ?></span></td>

					</tr>
					<tr>
						<td align="right">Phone</td>
						<td>: <input type="text" name="phone" placeholder="code">- <input type="text" name="phone" placeholder="Number">  </td>
						<td> <span><?php echo $err_phone; ?></span></td>

					</tr>
					<tr>
						<td align="right">Address:</td>
						<td><input type="text" name="address"placeholder="Street Address"><br>
            <input type="text" name="address" placeholder="City">-<input type="State" name="state" placeholder="State"><br>
            <input type="text" name="address" placeholder="Postal/Zip Code"> </td>
						<td> <span><?php echo $err_address; ?></span></td>

					</tr>
					<tr>
						<td align="right">Birth Date</td>
						<td>: <select name="birthdate">
						<option disabled selected>Day</option>
            <?php
						$selected ="";
						foreach ($array as $d) {
							if($d==$birthdate)
							echo"<option selected>$d</option>";
							else
								echo"<option>$d</option>";


						} ?>

						</select>
           <select name="birthdate">
						<option disabled selected>Month</option>
						<?php
						$selected ="";
						foreach ($array1 as $m) {
							if($m==$birthdate)
							echo"<option selected>$m</option>";
							else
								echo"<option>$m</option>";


						} ?>
						</select>

          <select name="birthdate">
						<option disabled selected>Year</option>
						<?php
						$selected ="";
						foreach ($array2 as $y) {
							if($y==$birthdate)
							echo"<option selected>$y</option>";
							else
								echo"<option>$y</option>";


						} ?>
						</select>
            </td>
						<td> <span><?php echo $err_birthdate; ?></span></td>

					</tr>
					<tr>
						<td align="right">Gender</td>
						<td>: <input type="radio" value="Male" <?php if($gender=="Male") echo"checked"; ?> name="gender">Male <input type="radio" value="Female" <?php if($gender=="Female") echo"checked"; ?> name="gender">Female </td>
						<td> <span><?php echo $err_gender; ?></span></td>

					</tr>
					<tr>
						<td align="right">Where did you hear about us? :</td>
						<td><input type="checkbox" name="hear[]" <?php if (hearExist("A Friend or Colleague")) echo "checked" ?> value="A Friend or Colleague">A Friend or Colleague<br>
						<input type="checkbox" name="hear[]" <?php if (hearExist("Google")) echo "checked" ?> value="Google">Google<br>
						<input type="checkbox" name="hear[]" <?php if (hearExist("Blog Post")) echo "checked" ?> value="Blog Post">Blog Post<br>
						<input type="checkbox" name="hear[]" <?php if (hearExist("News Article")) echo "checked" ?> value="News Article">News Article</td>
						<td> <span><?php echo $err_hear; ?></span></td>

					</tr>
					<tr>
						<td align="right">Bio</td>
						<td> <textarea name="bio"> <?php echo $bio ?> </textarea>
						<td> <span><?php echo $err_bio; ?></span></td>
						</td>

					</tr>
					<tr>
						<td colspan="2" align="center"> <input type="submit" value="Submit"> </td>
					</tr>
				</table>
			</fieldset>
			</form>
	</body>
</html>
