<?php
if (isset($_GET['id'])) {
include("connect.php");
$id = $_GET['id'];
$sql = "DELETE FROM product WHERE id='$id'";
if(mysqli_query($db_con,$sql)){
    session_start();
    $_SESSION["delete"] = "product Record Deleted Successfully!";
    header("Location:viewproduct.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Record does not exist";
}
?>