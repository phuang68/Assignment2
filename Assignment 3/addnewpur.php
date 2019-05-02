<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Company</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Here are your purchases:</h1>
<ol>
<?php
   $whichCus= $_POST["customers"];
   $quantity = $_POST["quantity"];
   $whichProd =$_POST["products"];
   $query = 'INSERT INTO purchases VALUES("' . $whichCus . '","' . $whichProd . '","' . $quantity . '") ON DUPLICATE KEY UPDATE quantity = quantity + "'.$quantity. '"';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your purchase was added!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
