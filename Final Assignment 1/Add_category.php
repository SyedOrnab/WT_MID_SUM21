<?php

include 'controllers/CategoryController.php'

?>

<html>
<body>
<h3><?php echo $err_db; ?></h3>

<form action="" method="post">

<p><h4>Name</h4>
  <input type="text" name="name" value="<?php echo $name; ?>">
  <span> <?php echo $err_name; ?> </span></p>

<p><input type="submit" name="add_category" value="Add Category"></p>
</form>
</body>
</html>
