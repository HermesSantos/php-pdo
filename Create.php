<?php
require('Database.php');
$firstname = $_GET['FirstName'];
$lastname = $_GET['LastName'];
$address = $_GET['Address'];
$city = $_GET['City'];

$db = DataBase::Connect();
$sql = "INSERT INTO persons (LastName, Firstname, Address, City) VALUES ('".$lastname."','".$firstname."','".$address."','".$city."')";

// prepara a query
$prepared = $db->prepare($sql);
// executa a query
$prepared->execute();