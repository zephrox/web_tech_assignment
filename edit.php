<?php
include "db.php";



$id = $_GET['id'];
$sql = "select * from products where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
    <title>Edit Product</title>
</head>
<body>

<fieldset>
    <legend>EDIT PRODUCT</legend>

    <form action="edit_save.php?id=<?php echo $id; ?>" method="post">

        Name <br>
        <input type="text" name="name" value="<?php echo $row['name']; ?>">
        <br>

        Buying Price <br>
        <input type="number" name="buy" value="<?php echo $row['buying_price']; ?>">
        <br>

        Selling Price <br>
        <input type="number" name="sell" value="<?php echo $row['selling_price']; ?>">
        <br>

        <input type="checkbox" name="display" value="Yes"
        <?php if($row['display']=="Yes") echo "checked"; ?>>
        <hr>
        Display
        <hr>

        <input type="submit" value="SAVE">

    </form>

</fieldset>

</body>
</html>
