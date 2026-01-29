<?php
include "db.php";

$id = $_GET['id'];
$sql = "delete from products where id=$id";

if(mysqli_query($con, $sql)){
    echo "deleted";
}else{
    echo "error";
}
?>
