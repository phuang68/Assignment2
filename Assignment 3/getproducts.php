<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Products</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are your products:</h1>
<ol>
<?php
   $whichCus= $_POST["customers"];
   $query = 'SELECT * FROM purchases, product WHERE purchases.prodID=product.prodID AND purchases.cusID="' . $whichCus . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["description"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
