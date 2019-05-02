<?php
	include 'connectdb.php';
?>
<h1>Here are the customers:</h1>
<?php
	$quantity = $_POST["quantity"];
	echo "Quantity is ".$quantity."";
	$query = 'SELECT DISTINCT firstname, lastname FROM customer INNER JOIN purchases ON purchases.cusID = customer.cusID WHERE Quantity > '.$quantity.'';
	$result = mysqli_query($connection, $query);
	if (!$result) {
        	die("Error: insert failed" . mysqli_error($connection));
    	}
	echo "<ol>";
	while($row = mysqli_fetch_assoc($result)) {
   		echo "<li>";
    		echo $row["firstname"]." ".$row["lastname"]. "</li>";
	}
	mysqli_free_result($result);
	echo "</ol>";
?>
