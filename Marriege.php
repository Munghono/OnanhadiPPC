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
$names = $_POST['fname'];
$surName = $_POST['lname'];
$iD = $_POST['id'];
$nameOfSpouse = $_POST['spousename'];
$iDSpouse = $_POST['spouseID'];
$marriegeDate = $_POST['marriegeDate'];
$MarriegePlace = $_POST['marriegePlace']

//insert the data in the variable created above into the database collumn
$sql = "INSERT INTO marriege (fname, lname, idNo, spouseNames,  spouseNo, marriegeDate, placeOfMarriege,) value ('$names', '$surName', '$iD', '$nameOfSpouse', '$iDSpouse', '$marriegeDate',  $MarriegePlace )";

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
