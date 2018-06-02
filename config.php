<?php 

$servername = "sql313.cuccfree.com";
$username = "cucch_14999267";
$password = "p1p2p364";
$dbname= "cucch_14999267_itikyal";

//CREATE TABLE students(hallticket VARCHAR(255) NOT NULL , firstname VARCHAR(255), lastname VARCHAR(255), fathername VARCHAR(255), contact int, email VARCHAR(255), PRIMARY KEY(hallticket));


// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

?>
