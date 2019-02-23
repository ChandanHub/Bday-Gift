<?php


$name= $_POST["name"];
$comment=$_POST["message"];

$servername = "";
$username = "";
$password = "";
$dbname = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO messageyogi(name, message)
VALUES ('$name','$comment')";

$sqlb = "INSERT INTO messagebyogi(name, message)
VALUES ('$name','$comment')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully \n";
	$last_id = mysqli_insert_id($conn);
	echo "<br><h1 style=\"color:red;\"> Your Refrence ID is  - ".$last_id."</h1>";
      sleep(5);
mysqli_query($conn, $sqlb);
	header("Location: http://www.bday.epizy.com/yogi.php");
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



	


mysqli_close($conn); 

?>		