<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','onanhadippc');

// get the post records
$names = $_POST['fname'];
$surName = $_POST['lname'];
$iD = $_POST['id'];
$dateOfBirth = $_POST['dobirth'];
$placeOfBirth = $_POST['pbirth'];
$dateOfBaptism = $_POST['baptismdate'];
$placeOfBaptism = $_POST['baptismplace'];
$mothersName = $_POST['mothern'];
$fathersName = $_POST['fathern'];
$contacts = $_POST['contact'];
$emailAdress = $_POST['email'];
$nextOfKin = $_POST['kin'];
$nextOfKinDetails = $_POST['nextdetails'];
$rank = $_POST['rank'];
$resAdress = $_POST['residential'];
$previousChurch = $_POST['previouschurch'];

//insert the data in the variable created above into the database collumn
$sql = "INSERT INTO `membershipregistraton` (`id`, `fName`, `lName`, `idNo`, `dateOfBirth`, `placeOfBirth`, `dateOfBaptism`, `placeOfBaptism`, `mothersNames`, `fathersNames`, `contactDetails`, `email`, `nextOfKin`,  `detailsOfNextOfKin`, `rank`, `residentialAddress`, `previousChurch`) value ('0', $names', '$surName', '$iD', '$dateOfBirth', '$placeOfBirth', '$dateOfBaptism', '$placeOfBaptism', '$mothersName', '$fathersName', '$contacts', '$emailAdress', '$nextOfKin', '$nextOfKinDetails', '$rank', '$resAdress', '$previousChurch')";

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
