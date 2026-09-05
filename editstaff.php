<!DOCTYPE html>
<html>
<head>
<title>View staff Information </title>
 <link rel="icon" href="pic.jpg" type="image/icon type">
</head>
<style>
body {background-color: powderblue;}
</style>
<center>
<a href="createstaff.php">staff info </a></li>
<a href="createproduct.php">product info </a></li>
<a href="viewstaff.php">Staff info </a></li>
<a href="viewproduct.php">product info </a></li>
<a href="createcustomer.php">customer info </a></li>
<a href="viewcustomer.php">customer info </a></li>
<body>
    <center><h1>EDIT STAFF RECORD</h1></center>
        <form action="editstaffprocess.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM staff WHERE id=$id";
                $result = mysqli_query($db_con,$sql);
                $row = mysqli_fetch_array($result);
                ?>
				<P> </P>
				
                     <div class="form-elemnt my-4">
			<label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="name:" value="<?php echo $row["name"]; ?>">
            </div><br>
            <div class="form-elemnt my-4">
			<label for="age">age</label>
                <input type="text" class="form-control" name="age" placeholder="age:" value="<?php echo $row["age"]; ?>">
          </div><br>
			<div class="form-elemnt my-4">
			<label for="address">address</label>
                <input type="text" class="form-control" name="address" placeholder="address:" value="<?php echo $row["address"]; ?>">
            </div><br>
			
             <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit Record" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>staff Record Does Not Exist</h3>";
            }
            ?>
           
        </form>
      </center>  
        
    </div>
</body>
</html>