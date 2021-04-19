<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = "dtoGNTe5@4"; /* Password */
$dbname = "test"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}
