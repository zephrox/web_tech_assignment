<?php
include "db.php";

$id = $_GET['id'];
$sql = "select * from products where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
    <title>Delete Product</title>
</head>
<body>

<fieldset>
    <legend>DELETE PRODUCT</legend>

    Name: <?php echo $row['name']; ?><br><br>
    Buying Price: <?php echo $row['buying_price']; ?><br><br>
    Selling Price: <?php echo $row['selling_price']; ?><br><br>
    Displayable: <?php echo $row['display']; ?>
    <hr>
    <form action="delete_confirm.php?id=<?php echo $id; ?>" method="post">
        <input type="submit" value="Delete">
    </form>

</fieldset>

</body>
</html>
