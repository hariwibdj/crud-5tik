<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbakademik";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// else {
//     echo "<h1>koneksi berhasil</h1>";
// }

// Create connection

?>