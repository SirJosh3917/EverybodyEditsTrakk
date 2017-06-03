<?php

if(isset($_GET["home"])) {
if(isset($_GET["id"])) {

$getId = $_GET["id"];

if(ctype_digit($getId)) {

$servername = "localhost";
$username = ""; //account here
$password = ""; //password here
$dbname = ""; //database here

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Please refresh the page: " . mysqli_connect_error());
}

$set = false;
$isset = false;
$sql = "SELECT type from blocks where id=$getId" . ";";
$result = mysqli_query($conn,$sql);

while ($row = $result->fetch_assoc()) {
	$isset = true;
	$set = !$row["type"];
}

if($isset == false) {
	$sql = "INSERT INTO blocks (id, type) VALUES ($getId, true);";
	$result = mysqli_query($conn,$sql);
} else {
	$sql = "UPDATE blocks SET type=" . ($set == true ? "true" : "false" ) . " WHERE id=$getId" . ";";
	$result = mysqli_query($conn,$sql);
}

$sql = "SELECT * from blocks where id=$getId" . ";";
$result = mysqli_query($conn,$sql);

header("Location: " . $_GET["home"]);
exit();

}}}

?>