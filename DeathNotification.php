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
$idNo = $_POST['id'];
$dateOfBirth = $_POST['dobirth'];
$mothersName = $_POST['mothern'];
$fathersName = $_POST['fathern'];
$deathDate = $_POST['dob'];

//insert the data in the variable created above into the database collumn
$sql = "INSERT INTO deathnotification (fName, lName, id, dateOfBirth, mothersName, fathersName, dateOfDeath) value ('$fnames', '$lname', '$idNo', $dateOfBirth', '$mothersName', '$fathersName', '$deathDate')";

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
