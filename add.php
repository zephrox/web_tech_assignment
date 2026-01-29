<?php
include "db.php";
$name = $_POST['name'];
$buy = $_POST['buy'];
$sell = $_POST['sell'];

if(isset($_POST['display'])){
    $display = "Yes";
}else{
    $display = "No";
}

$sql = "insert into products values(null,'$name','$buy','$sell','$display')";

if(mysqli_query($con, $sql)){
    echo "success";
}else{
    echo "error";
}
?>
