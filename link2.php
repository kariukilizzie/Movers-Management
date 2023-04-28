<?php

include('config.php');

// get the post records
$Names = $_POST['client names'];
$Location = $_POST['client location'];
$Email = $_POST['client email'];
$phone_number = $_POST['client phone number'];
// database connection code
$con = mysqli_connect('localhost', 'root', '','Your Movers');

$sql = "INSERT INTO Client (`client name`, `client location`, `client Email`, `client phone_number') VALUES ('','$Names', '$Location', '$Email' , '$Phone_number')";
}
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Client Records Inserted";
}

?>