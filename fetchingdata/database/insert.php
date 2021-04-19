<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "trugene";

// $servername = "localhost";
// $username = "d2vrulu_trugen";
// $password = "Letmein@1a";
// $dbname = "d2vrulu4_truegene";




$name = $_POST['name'];
$reason = $_POST['reason'];
$email = $_POST['email'];
$refered = $_POST['refered'];
$phone = $_POST['phone'];
$message = $_POST['message'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO shedule_appintment (name, reason,email,refered,phone,message) values ('$name', '$reason','$email','$refered','$phone','$message')";

if ($conn->query($sql) === TRUE) {
 header("Location: /office/trugene-final/schedule_thankyou.html");


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
?>
<!-- d2vrulu4_truegene
@Br@veBraveL@b007
d2vrulu -->
