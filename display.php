<?php
include "db.php";

$sql = "select * from products where display='Yes'";
$result = mysqli_query($con, $sql);
?>
<html>
<head>
    <title>Display Products</title>
</head>
<body>

<fieldset>
    <legend>DISPLAY</legend>

    <table border="1" cellpadding="5">
        <tr>
            <th>NAME</th>
            <th>PROFIT</th>
            <th></th>
            <th></th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($result)){
            $profit = $row['selling_price'] - $row['buying_price'];
        ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $profit; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">edit</a>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $row['id']; ?>">delete</a>
            </td>
        </tr>
        <?php } ?>

    </table>

</fieldset>

</body>
</html>
