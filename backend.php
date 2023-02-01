<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "messages");


$values =  "'" . $_GET['Email'] . "','" . $_GET['Msg'] ."'";
$query = "INSERT INTO msgs(email, msg) VALUES(".$values . ");";

$conn->query($query);

?>