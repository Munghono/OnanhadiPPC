<?php
//Connect and select a database
$con = mysql_connect ("localhost", "root", "");

if (!$con)
{
	echo "You are not connected";
}

if (!mysql_select_db($con, 'onanhadippc'))
{
	echo "You did not select any database";
}
//create a variableof $...to hold the info from the form (names that created from the form)
$fnames = $_POST['fname'];
$lname = $_POST['lname'];
$dateOfBirth = $_POST['dobirth'];
$placeOfBirth = $_POST['pbirth'];
$idNum = $_POST['id'];
$dateOfBaptism = $_POST['baptismdate'];
$placeOfBaptism = $_POST['baptismplace'];
$mothersName = $_POST['mothern'];
$fathersName = $_POST['fathern'];
$contactDetails = $_POST['contact'];
$nextOfKin = $_POST['kin'];
$detailsOfNextOfKin = $_POST['nextofkindetails'];
$rank = $_POST['rank'];
$resdential = $_POST['resdential']

//insert the data in the variable created above into the database collumn
mysql_query = ("INSERT INTO baptism (fName, lName, dateOfBirth, placeOfBirth, idNo, dateOfBaptism, placeOfBaptism,  mothersName, fathersName, contactDetails, nextOfKin, detailsOfNextOfKin, rank, resdentialAddress) value ('$fnames', '$lname', '$dateOfBirth', '$placeOfBirth', '$idNum', '$dateOfBaptism',  '$placeOfBaptism', '$mothersName', '$fathersName', '$contactDetails', '$nextOfKin', '$detailsOfNextOfKin', '$rank', '$resdential')");

if (!mysql_query($con, $sql))
	{
		echo"All field must be filled in but email may not be filled";
	}
else
	{
		echo "Succesful inserted";
	}

	header("refresh:2; url=ConnectionQuery.php");
?>
