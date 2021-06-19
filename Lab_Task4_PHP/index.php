<?php
$name = "";
$err_name = "";
$username = "";
$err_username = "";
$password = "";
$err_password = "";
$confirm_password = "";
$err_confirm_password = "";
$email = "";
$err_email = "";
$phone = "";
$err_phone = "";
$gender = "";
$err_gender = "";
$address = "";
$err_address = "";
$city = "";
$err_city = "";
$state = "";
$err_state = "";
$postal = "";
$err_postal = "";
$birthdate = "";
$err_birthdate = "";
$birthmonth = "";
$err_birthmonth = "";
$birthyear = "";
$err_birthyear = "";
$hear = [];
$err_hear = "";
$bio = "";
$err_bio= "";

$hasError = false;


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["name"]))
	{
		$hasError = true;
		$err_name = "Name required";
	}
	else if(strlen($_POST["name"])<= 2)
	{
		$hasError = true;
		$err_name = "Name must be greater than 2 characters";
	}
	else
	{
		$name = htmlspecialchars($_POST["name"]);
	}

	if(empty($_POST["username"]))
	{
		$hasError = true;
		$err_username = "UserName required";
	}
	else if(strlen($_POST["username"])<= 6)
	{
		$hasError = true;
		$err_username = "UserName must be at least 6 characters";
	}
	else if(strpos($_POST["username"], ' ') !== false)
	{
		$hasError = true;
		$err_username = "UserName doesn't allow spaces";
	}
	else
	{
		$username = $_POST["username"];
	}


	if(empty($_POST["password"]))
	{
		$hasError = true;
		$err_password = "Password required";
	}
	else
	{
		$password = $_POST["password"];
	}

	if(empty($_POST["confirm_password"]))
	{
		$hasError = true;
		$err_confirm_password = "Password required";
	}
	else if(strlen($_POST["confirm_password"])<= 8 && strpos($_POST["confirm_password"],'#','?') == false && ctype_upper($_POST["confirm_password"]) == false && ctype_lower($_POST["confirm_password"]) == false)
	{
		$hasError = true;
		$err_confirm_password = "Password required";
	}
	else
	{
		$confirm_password = $_POST["confirm_password"];
	}

	if(empty($_POST["email"]))
	{
		$hasError = true;
		$err_email = "Email required";
	}
	else if(!preg_match("@,.",$_POST["email"]))
	{
		$hasError = true;
		$err_email = "Email format not correct";
	}
	else
	{
		$email = $_POST["email"];
	}

	if(empty($_POST["phone"]))
	{
		$hasError = true;
		$err_phone = "Phone required";
	}
	else if(is_numeric($_POST["phone"]) != true)
	{
		$hasError = true;
		$err_phone = "Invalid Phone number";

	}
	else
	{
		$phone = $_POST["phone"];
	}


  if(empty($_POST["address"]))
	{
		$hasError = true;
		$err_address = "Address required";
	}
	else
	{
		$address = $_POST["address"];
	}


  if(empty($_POST["city"]))
	{
		$hasError = true;
		$err_city = "City required";
	}
	else
	{
		$city = $_POST["City"];
	}


  if(empty($_POST["state"]))
	{
		$hasError = true;
		$err_state = "State required";
	}
	else
	{
		$state = $_POST["state"];
	}


  if(empty($_POST["postal"]))
	{
		$hasError = true;
		$err_postal = "Postal required";
	}
	else
	{
		$postal = $_POST["Postal"];
	}


  if(!isset($_POST["gender"]))
	{
		$hasError = true;
		$err_gender = "Gender required";
	}
	else
	{
		$gender = $_POST["gender"];
	}


  if(!isset($_POST["hear"]))
	{
		$hasError = true;
		$err_hear = "This part is required";
	}
	else
	{
		$hear = $_POST["hear"];
	}


  if(!isset($_POST["bio"]))
	{
		$hasError = true;
		$err_bio = "Bio required";
	}
	else
	{
		$bio = $_POST["bio"];
	}



  echo $_POST["Name"]."<br>";
	echo $_POST["username"]."<br>";
  echo $_POST["Password"]."<br>";
	echo $_POST["Email"]."<br>";
	echo $_POST["Phone"]."<br>";
	echo $_POST["Address"]."<br>";
	echo $_POST["birthdate"]."<br>";
	echo $_POST["birthmonth"]."<br>";
	echo $_POST["birthyear"]."<br>";
  echo $_POST["gender"]."<br>";
  //echo $_POST["hear"]."<br>";
  echo $_POST["Bio"]."<br>";

  $arr = $_POST["hear"];

  foreach($arr as $e)
    {
	echo "$e<br>";
    }
}

?>

<html>
    <body> <fieldset>
	<h1>Club Member Registration</h1>
	<form action="" method="post">
	<table>
	<tr>
	<td>Name</td>
	<td>: <input name="Name" type="text" placeholder="">
	<span><?php echo $err_name; ?></span></td>
	</tr>
	<tr>
	<td>UserName</td>
	<td>: <input name="username" type="text" placeholder="">
	<span><?php echo $err_username; ?></span></td>
	</tr>
	<tr>
	<td>Password</td>
	<td>: <input name="Password" type="password" placeholder="">
	<span><?php echo $err_password; ?></span></td>
	</tr>
	<tr>
	<td>Confirm Password</td>
	<td>: <input name="Confirm Password" type="password" placeholder="">
	<span><?php echo $err_confirm_password; ?></span></td>
	</tr>
	<tr>
	<td>Email</td>
	<td>: <input name="Email" type="text" placeholder="">
	<span><?php echo $err_email; ?></span></td>
	</tr>
	<tr>
	<td>Phone</td>
	<td>: <input name="Phone" type="text" placeholder="">
	<span><?php echo $err_phone; ?></span></td>
	</tr>
	<tr>
	<td>Address</td>
	<td>: <input name="Address" type="text" placeholder="Street Address">
	<span><?php echo $err_address; ?></span></td>
	</tr>
	<tr><td></td>
	<td><span><input name="City" type="text" placeholder="City">
    <span><?php echo $err_city; ?></span>	-
	<input name="State" type="text" placeholder="State"></span>
	<span><?php echo $err_state; ?></span>
  <span><input name="Postal" type="text" placeholder="Postal/Zip Code"></span></td>
	<tr>
	<tr>
	<span><?php echo $err_postal; ?></span></td></tr>

	<tr><td>Birth Date :
	</td>
	<td>
	<select name="birthdate">
	 <option selected disabled >--Day--</option>
	<?php for($i=1;$i<=31;$i++) echo "<option>$i</option>"; ?>
	</select>
	<span>&nbsp; <?php echo $err_birthdate;?></span>

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
	<span>&nbsp; <?php echo $err_birthmonth;?></span>


	<select name="birthyear">
	 <option selected disabled >--Year--</option>
	<?php for($i=1990;$i<=2021;$i++) echo "<option>$i</option>"; ?>
	</select>
	<span><?php echo $err_birthyear;?></span>
	</td> </tr>

	<td>Gender</td>
	<td>: <input type="radio" value="Male" name="gender">Male <input type="radio" value="Female" name="gender">Female
	<span><?php echo $err_gender;?></span></td>
	</tr>

	<tr> <td>Whare did you hear about us? : </td>
	<td><input type="checkbox" value="Friend" name="hear[]"> A Friend or Colleague <br> <input type="checkbox" value="Google" name="hear[]"> Google <br>

	<input type="checkbox" value="Blog" name="hear[]"> Blog Post <br><input type="checkbox" value="News" name="hear[]"> News Article
	<span><?php echo $err_hear;?></span></td> </tr>

	<tr> <td> Bio :</td> <td>  <textarea  name="Bio" placeholder=""></textarea>
	<span><?php echo $err_bio;?></span></td></tr>
	<tr> <td align="right"> </td>
	<td> </td> </tr>
	<tr><td></td>
	<td> <input type="submit" value="register" > </td> </tr>

	</table>
</form>
</body>
</html>
