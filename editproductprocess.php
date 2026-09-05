<?php
include('connect.php');

	$name=$_POST['name'];
    $price=$_POST['price'];
	$location=$_POST['location'];
	
  
if (isset($_POST["edit"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
   $price = mysqli_real_escape_string($db_con, $_POST["price"]);
    $location = mysqli_real_escape_string($db_con, $_POST["location"]);
	$id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE product SET name = '$name', price = '$price', location = '$location' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "product Record Updated Successfully!";
        header("Location:viewproduct.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>






