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
$fnames = $_POST['fname'];
$lname = $_POST['lname'];
$dateOfBirth = $_POST['dobirth'];
$placeOfBirth = $_POST['pbirth'];
$dateOfDedication = $_POST['dedicationdate'];
$placeOfDedication = $_POST['dedicationplace'];
$mothersName = $_POST['mothern'];
$fathersName = $_POST['fathern'];
$nextOfKin = $_POST['kin'];
$detailsOfNextOfKin = $_POST['nextofkindetails'];

//insert the data in the variable created above into the database collumn
$sql = "INSERT INTO dedication (fname, lname, dateOfBirth, placeOfBirth, dateOfDedication, placeOfDedication, mothersNames, fathersNames, nextOfKin, detailsOfNextOfKin) value ('$fnames', '$lname', '$dateOfBirth', '$placeOfBirth', '$dateOfDedication',  '$placeOfDedication', '$mothersName', '$fathersName', '$nextOfKin', '$detailsOfNextOfKin')";

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
