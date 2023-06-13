<?php
$servername="localhost";
$username="root";
$password="";
$database="mesecni_troskovi";

//konekcija na bazu
$conn = mysqli_connect($servername,$username,$password,$database);
if (!$conn) {
	die("Nije uspela konekcija! ". mysqli_connect_error());
}
// Podrška za naša slova UTF-8
mysqli_set_charset($conn, "utf8");
?>