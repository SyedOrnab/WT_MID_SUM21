<?php
$name="";
$err_name="";
$pnumber="";
$err_pnumber="";
$rnumber="";
$err_rnumber="";
$bnumber="";
$err_bnumber="";
$jdate="";
$err_jdate="";
$oxygencylinder="";
$err_oxygencylinder="";
$cost="";
$err_cost="";
$rdate="";
$err_rdate="";

$hasError=false;
if ($_SERVER["REQUEST_METHOD"]=="POST") {
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
  if(empty($_POST["pnumber"])){
    $hasError = true;
    $err_pnumber="Patient Number Required";
  }

  else{
    $pnumber = $_POST["pnumber"];
  }
  if(empty($_POST["rnumber"])){
    $hasError = true;
    $err_rnumber="Room Number Required";
  }
  else{
    $rnumber = $_POST["rnumber"];
  }
  if(empty($_POST["bnumber"])){
    $hasError = true;
    $err_bnumber="Bed Number Required";
  }
  else{
    $bnumber = $_POST["bnumber"];
  }
  if(empty($_POST["jdate"])){
    $hasError = true;
    $err_jdate="Join Date Required";
  }
  else{
    $jdate = $_POST["jdate"];
  }
  if(empty($_POST["oxygencylinder"])){
    $hasError = true;
    $err_oxygencylinder="Oxygen Cylinder Required";
  }
  else{
    $oxygencylinder = $_POST["oxygencylinder"];
  }
  if(empty($_POST["cost"])){
    $hasError = true;
    $err_cost="Cost Required";
  }
  else{
    $cost = $_POST["cost"];
  }
  if(empty($_POST["rdate"])){
    $hasError = true;
    $err_rdate="Release Date Required";
  }
  else{
    $rdate = $_POST["rdate"];
  }

if(!$hasError){
echo "<h1>Public Release submitted</h1>";
echo $_POST["name"]."<br>";
echo $_POST["pnumber"]."<br>";
echo $_POST["rnumber"]."<br>";
echo $_POST["bnumber"]."<br>";
echo $_POST["jdate"]."<br>";
echo $_POST["oxygencylinder"]."<br>";
echo $_POST["cost"]."<br>";
echo $_POST["rdate"]."<br>";
}
}
 ?>
<html>
  <head>
    <title>Public Care</title>
  </head>
  <body>
    <table>
      <tr>
        <td><img height="200px" width="300px" src="1600x960_342636-long-term-impact-of-covid1440x563.jpg"> </td>
        <td><img height="200px" width="300px" src="AQPS21_960x539.jpg"> </td>
        <td><img height="200px" width="300px" src="images.jpg"> </td>
        <td><img height="200px" width="300px" src="MzYxNTMxNQ (1).jpg"> </td>
    </table>
    <form action="" method="post">
      <fieldset>
        <h3 align="center"><u>Public Care</u></h3>
        <p>
          <table align="center">
            <tr>
              <td align="right">Patient name:</td>
              <td><input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter Name"> </td>
              <td><span><?php echo $err_name; ?></span></td>
            </tr>
            <tr>
              <td align="right">Patient Number:</td>
              <td><input type="text" name="pnumber" value="<?php echo $pnumber; ?>" placeholder="Enter Number"> </td>
              <td><span><?php echo $err_pnumber; ?></span></td>
            </tr>
            <tr>
              <td align="right">Patient Room Number:</td>
              <td><input type="text" name="rnumber" value="<?php  echo $rnumber; ?>"  placeholder="Enter Room Number"> </td>
              <td><span><?php echo $err_rnumber; ?></span></td>
            </tr>
            <tr>
              <td align="right">Patient Bed Number:</td>
              <td><input type="text" name="bnumber" value="<?php echo $bnumber; ?>" placeholder="Enter Bed Number"> </td>
              <td><span><?php echo $err_bnumber; ?></span></td>
            </tr>
            <tr>
              <td align="right">Patient Join Date:</td>
              <td><input type="datetime-local" name="jdate" value="<?php echo $jdate; ?>" placeholder="Enter Join Date"> </td>
              <td><span><?php echo $err_jdate; ?></span></td>
            </tr>
            <tr>
              <td align="right">Patient Total Need Oxygen cylinder: </td>
              <td><input type="number" name="oxygencylinder" value="<?php echo $oxygencylinder; ?>" placeholder="Total Need of Oxygen cylinder"> </td>
              <td><span><?php echo $err_oxygencylinder; ?></span></td>
            </tr>
            <tr>
              <td align="right">Patient Total allover cost: </td>
              <td><input type="number" name="cost" value="<?php echo $cost; ?>" placeholder="Enter Total Cost"> </td>
              <td><span><?php echo $err_cost; ?></span></td>
            </tr>
            <tr>
              <td align="right">Patient Release Date: </td>
              <td><input type="datetime-local" name="rdate" value="<?php echo $rdate; ?>" placeholder="Enter Release Date"> </td>
              <td><span><?php echo $err_rdate; ?></span></td>
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
