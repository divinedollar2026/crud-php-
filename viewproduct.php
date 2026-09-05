<!DOCTYPE html>
<html>
<head>
<title>View PRODUCT Information </title>
 <link rel="icon" href="pic.jpg" type="image/icon type">
</head>
<style>
body {background-color: powderblue;}
</style>
<body>
 <center>
 <a href="createcustomer.php">customer Form </a></li>
<a href="createproduct.php">product Form </a></li>
<a href="createstaff.php">Staff Form </a></li>
<a href="viewcustomer.php">customer info </a></li>
<a href="viewproduct.php">products info </a></li>
<a href="viewstaff.php">staff info </a></li>
<center><h1>PRODUCT DETAILS</h1></center>
  <div class="panel-body">
 <div class="table-responsive table-bordered">
   <table class="table">
      <thead>
	  
     <tr>
 <th>#</th>
 <th>Name </th>
 <th>location </th>
 <th>Price</th>
 </tr>
 </thead>
 
<tbody>

<?php
include 'connect.php';
$sql=mysqli_query($db_con,"select * from product");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>


                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo htmlentities($row['name']);?></td>
                                            <td><?php echo htmlentities($row['location']);?></td>
											<td><?php echo htmlentities($row['price']);?></td>
                                           <td>
                    
                    <a href="editproduct.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="deleteproduct.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
                                            <td>
                                            
                                        </tr>
<?php 
$cnt++;
} ?>

                                        
                                    </tbody>
                                </table>
								</center>
								
                            </div>
                        </div>
                    </div>
                     <!--  End  Bordered Table  -->
                </div>
            </div>





        </div>
    </div>
   
   
</body>
</html>

