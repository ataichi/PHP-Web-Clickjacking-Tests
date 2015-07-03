<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$schema = 'php1';
$dbconn = new mysqli($dbhost, $dbuser, $dbpass, $schema); //connect to db php1

if (mysqli_connect_errno()) {
    die('Could not connect: ' . mysqli_connect_error()); //prints error message and exit
}
mysqli_connect($dbhost, $dbuser, $dbpass, $schema);

?>