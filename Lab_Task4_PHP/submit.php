<?php
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

?>
