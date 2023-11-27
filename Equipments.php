<?php
//Connect and select a database
$conn = mysqli_connect ("localhost", "root", "");

if (!$conn)
{
	echo "You are not connected";
}

if (!mysqli_select_db($conn, 'onanhadippc'))
{
	echo "You did not select any database";
}
//create a variableof $...to hold the info from the form (names that created from the form)
$product = $_POST['productname'];
$serial = $_POST['snum'];
$parchDate = $_POST['parchaseDate'];
$howParchased = $_POST['howParchased'];

//insert the data in the variable created above into the database collumn
$sql = "INSERT INTO equipments (productName, serialNumber, dateOfParchase, howWasParchased) value ('$product', '$serial', '$parchDate', '$howParchased')";

if (!mysqli_query($conn, $sql))
	{
		echo"All field must be filled in but email may not be filled";
	}
else
	{
		echo "Succesful inserted";
	}

	header("refresh:2; url=ConnectionQuery.php");
?>
