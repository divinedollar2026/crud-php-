<!DOCTYPE html>
<html>
<head>
<title>View CUSTOMER Information </title>
 <link rel="icon" href="pic.jpg" type="image/icon type">
</head>
<style>
body {background-color: powderblue;}
</style>
<body>
 <center>
<a href="createstaff.php">staff Form </a></li>
<a href="createcustomer.php">customer Form </a></li>
<a href="createproduct.php">product Form </a></li>
<a href="viewstaff.php">Staff info </a></li>
<a href="viewproduct.php">product info </a></li>
<a href="viewcustomer.php">customer info </a></li>
<center><h1>CUSTOMER DETAILS</h1></center>
   
 <div class="panel-body">
 <div class="table-responsive table-bordered">
   <table class="table">
      <thead>
	  
     <tr>
 <th>#</th>
 <th>Name</th>
 <th>address </th>
 <th>price</th>
<th>Action</th>
 </tr>
 </thead>
 
<tbody>

<?php
include 'connect.php';
$sql=mysqli_query($db_con,"select * from customer");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>


                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo htmlentities($row['name']);?></td>
                                            <td><?php echo htmlentities($row['address']);?></td>
                                            <td><?php echo htmlentities($row['price']);?></td>
                                           <td>
                    
                    <a href="editcustomer.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="deletecustomer.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
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

