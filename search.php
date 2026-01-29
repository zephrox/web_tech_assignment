<?php
include "db.php";


$name = $_GET['name'];
$sql = "select * from products where name like '%$name%' and display='Yes'";
$result = mysqli_query($con, $sql);

echo "<table border='1' cellpadding='5'>";
echo "<tr>
        <th>NAME</th>
        <th>PROFIT</th>
        <th></th>
        <th></th>
      </tr>";

while($row = mysqli_fetch_assoc($result)){
    $profit = $row['selling_price'] - $row['buying_price'];

    echo "<tr>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$profit."</td>";
    echo "<td><a href='edit.php?id=".$row['id']."'>edit</a></td>";
    echo "<td><a href='delete.php?id=".$row['id']."'>delete</a></td>";
    echo "</tr>";
}
echo "</table>";
?>
