<?php
include('connect.php');

	$name=$_POST['name'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    
    

if (isset($_POST["create"])) {
    $name = mysqli_real_escape_string($db_con, $_POST["name"]);
    $age	= mysqli_real_escape_string($db_con, $_POST["age"]);
    $address = mysqli_real_escape_string($db_con, $_POST["address"]);
	
    $sqlInsert = "INSERT INTO staff(name , age , address) VALUES ('$name','$age','$address')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "staff Added Successfully!";
        header("Location:viewstaff.php");
    }else{
        die("Something went wrong");
    }
}


    


?>