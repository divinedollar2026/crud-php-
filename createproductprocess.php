<?php
include('connect.php');

	$name=$_POST['name'];
    $price=$_POST['price'];
	$location=$_POST['location'];
    
    

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $price = mysqli_real_escape_string($db_con, $_POST["price"]);
    $location = mysqli_real_escape_string($db_con, $_POST["location"]);
	
    $sqlInsert = "INSERT INTO admin(name , price, location ) VALUES ('$name','$price','$location')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "product Added Successfully!";
        header("Location:viewproduct.php");
    }else{
        die("Something went wrong");
    }
}


    


?>