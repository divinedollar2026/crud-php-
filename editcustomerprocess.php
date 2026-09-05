<?php
include('connect.php');

	$name=$_POST['name'];
    $address=$_POST['address'];
	$price=$_POST['price'];
  
  
if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
   $address = mysqli_real_escape_string($db_con, $_POST["address"]);
    $price = mysqli_real_escape_string($db_con, $_POST["price"]);
	$id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE customer SET name = '$name', address = '$address', price = '$price' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "customer Record Updated Successfully!";
        header("Location:viewcustomer.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>






