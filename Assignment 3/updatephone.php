<?php
   include 'connectdb.php';
?>
<h1>Updating your phone:</h1>
<?php
	$whichCus = $_POST["customers"];
	$newphone = $_POST["phone"];
	$query = 'UPDATE customer SET phonenumber = ".$newphone." WHERE cusID = ".$whichCus."';
	$result=mysqli_query($connection,$query);
   	if (!$result) {
          die("database update query failed.");
   	}
	echo "The phone number of ".$whichCus." has been updated";
	mysqli_close($connection);
?>
