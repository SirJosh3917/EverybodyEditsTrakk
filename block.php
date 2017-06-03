<?php

if(isset($_GET["id"])) {

$getId = $_GET["id"];

if(ctype_digit($getId)) {

$servername = "localhost";
$username = ""; //account name
$password = ""; //password
$dbname = ""; /db name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Please refresh the page: " . mysqli_connect_error());
}

$sql = "SELECT * from blocks where id=$getId" . ";";

$result = mysqli_query($conn,$sql);

while ($row = $result->fetch_assoc()) {
	if($row["type"] == true) {
		header("Location: gray.png");
	} else {
		header("Location: empty.png");
	}
	exit();
}

mysqli_query($conn, "INSERT INTO blocks (id, type) VALUES ($getId, false);");

}}

?>