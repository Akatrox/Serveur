<?php
$servername = "192.168.1.5";
$username = "root";
$password = "mysuperrootpassword";
$dbname = "Banque";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, username, password FROM compte WHERE username='".$_POST['username']."' and password='".$_POST['password']."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0 ) {
	header("Location: http://192.168.1.5/rep-form.php");
} else {
	header("Location: http://192.168.1.5/sqlinjection.php");
}

mysqli_close($conn);

#if ($_POST['username'] === 'admin' && $_POST['password'] === "gtrn3ts0345Y") {
#	echo "redirecting";
#	header("Location: http://192.168.1.5/rep-form.php");
#	exit;
#} else {
#	header("Location: http://192.168.1.5/index.html");	
#}
