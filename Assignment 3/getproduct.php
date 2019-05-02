<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Products</title>
</head>
<body>
<h1>Here are the products</h1>
<?php
include 'connectdb.php';
?>
<?php
$order = $_POST["order"];
switch($order){
case "DesA":
		$query = "SELECT * FROM product ORDER BY description";
		break;
case"DesD":
		$query = "SELECT * FROM product ORDER BY description DESC";
		break;
case"CosA":
		$query = "SELECT * FROM product ORDER BY cost ";
		break;
case"CosD":
		$query = "SELECT * FROM product ORDER BY cost DESC";
		break;
}
$result = mysqli_query($connection,$query);
if (!$result) {
     die("databases query failed.");
}
echo "<ol id = 'product'>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<li>";
    echo $row["prodID"]." | ".$row["description"]." | ".$row["cost"]."</li>";
}
mysqli_free_result($result);
echo "</ol>";
?>
</body>
</html>

