<!DOCTYPE html>
<html>
<head>
<title>product information</title>
 <link rel="icon" href="pick.jpg" type="image/icon type">
</head>
<style>
body {background-color: powdergreen;}
</style>
<body>
<center>
<a href="createstaff.php">staff info </a></li>
<a href="createcustomer.php">customer info </a></li>
<a href="viewstaff.php">Staff info </a></li>
<a href="viewcustomer.php">customer info </a></li>
<p style="color:red;">PLESE INPUT UR DETAILS BELOW THANKS FOR THE COOPERATION</p>

 <form action="createproductprocess.php" method="post">
  <label for="name">Name:</label><br>
   <input type="text" id="name" name="name"><br>
      <label for="address">address:</label><br>
  <input type="text" id="address" name="address" ><br>
   <label for="price">price:</label><br>
   <input type="text" id="price" name="price" ><br><br>
  <input type="submit" name="create" value="add" class="btn btn-primary">
  
</form> 

<P> </P>
 <a href="parent.php">parent info </a></li>
 <a href="view.php">View info</a></li>
</center>

</body>
</html>
