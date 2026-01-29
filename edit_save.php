<?php
include "db.php";

$id = $_GET['id'];
$name = $_POST['name'];
$buy = $_POST['buy'];
$sell = $_POST['sell'];

if(isset($_POST['display'])){
    $display = "Yes";
}else{
    $display = "No";
}

$sql = "update products set
        name='$name',
        buying_price='$buy',
        selling_price='$sell',
        display='$display'
        where id=$id";

if(mysqli_query($con, $sql)){
    echo "success";
}else{
    echo "error";
}
?>
