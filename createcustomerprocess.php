<?php
include('connect.php');

	$name=$_POST['name'];
    $address=$_POST['address'];
	$price=$_POST['price'];
    
    

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $address = mysqli_real_escape_string($db_con, $_POST["address"]);
    $price = mysqli_real_escape_string($db_con, $_POST["price"]);
	
    $sqlInsert = "INSERT INTO customer(name , address , price) VALUES ('$name','$address','$price')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "customer Added Successfully!";
        header("Location:viewcustomer.php");
    }else{
        die("Something went wrong");
    }
}


    


?>