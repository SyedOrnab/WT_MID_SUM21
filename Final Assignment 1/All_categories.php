<?php
include 'controllers/CategoryController.php';
$categories = getAllCategories();

?>

<html>
<body>
<h3> All Categories</h3>

<table>
    <thead>
        <th>S1#</th>
        <th>Name</th>
        <th>Product</th>
    </thead>

    <tbody>
        <?php
        $i=1;
        foreach($categories as $c){
            echo"<tr>";
                echo"<td> $i </td>";
                echo"<td>".$c["name"]."</td>";
                echo'<td><a href="Edit_category.php?id='.$c["id"].'">Edit</a></td>';
                echo'<td><a href="">Delete</a></td>';
            echo"</tr>";
            $i++;
        }
        ?>
    </tbody>
</table>

</body>
</html>
