<?php
/*IT20633240
Lakshan W.R.S.M.M
Group MLB_02.01_06
*/
$servername = "localhost";
$username = "root";
$password = "";
$db = "auction";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
