<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Company</title>
</head>
<script src="assign3.js"></script>
<body>
<?php
include 'connectdb.php';
?> 
<h1>Welcome to Our Company</h1>
<p>
<hr>
<p>
<h2>Customers</h2>
<form action="getproducts.php" method="post">
<?php
   include 'getdata.php';
?>
<input type="submit" value="Get Product">
</form>
<p>
<hr>
<p>
<h2>Products</h2>
<form action="getproduct.php" method="post">
<p>Which order would you like to present the product information?</p>
<input type = "radio" name = "order" value="DesA">Ascending by Description<br>
<input type = "radio" name = "order" value="DesD">Descending by Description<br>
<input type = "radio" name = "order" value="CosA">Ascending by Cost<br>
<input type = "radio" name ="order" value="CosD">Descending by Cost<br>
<input type="submit" value="Get Product Info">
</form>
<p>
<hr>
<p> 
<h2>Insert a New Purchase</h2>
<form action="addnewpur.php" method="post">
Quantity:<input type="number" name="quantity"><br>
New Purchase's Product: <br>
<?php
include 'getproduct1.php'
?>
For which customer: <br>
<?php
include 'getdata1.php';
?>
<input type="submit" value="Add New Purchase">
</form>
<p>
<hr>
<p>
<h2>Insert a New Customer</h2>
<form action="addnewcus.php" method="post">
New Customer First Name:<input type="text" name="fname"><br>
New Customer Last Name:<input type="text" name="lname"><br>
New Customer Phone Number:<input type="text" name="phone"><br>
New Customer City:<input type="text" name="city"> <br>
For which agent: <br>
<?php
include 'getagent.php'
?>
<input type="submit" value="Add New Customer">
</form>
<p>
<hr>
<p>
<h2>Update Customer's Phone Number</h2>
<form action="updatephone.php" method="post">
New phone number:<input type="text" name="phone"><br>
For which customer:<br>
<?php
include 'getdata1.php'
?>
<input type="submit" value="Update Phone Number">
</form>
<p>
<hr>
<p>
<h2>Delete a Customer</h2>
<form action="deletecus.php" method="post">
Which customer would you like to delete today?<br>
<?php
include 'getdata1.php'
?>
<input type="submit" value = "Delete customer">
</form>
<p>
<hr>
<p>
<h2>List Customers Bought More Than an Amount</h2>
<form action="showcus.php" method="post">
Quantity:<input type="number" name="quantity"><br>
<input type="submit" value="Show Customers">
</form>
<p>
<hr>
<p>
<h2>Never Purchased Product</h2>
<?php
include 'getproduct2.php'
?>
<p>
<hr>
<p>
<h2>Product Purchased</h2>
<form action="showprod2.php" method="post">
Which product are you looking for:<br>
<?php
include 'getproduct1.php'
?>
<input type="submit" value="Show Total Number of Purchases">
</form>
</body>
</html>
