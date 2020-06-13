<?php
include('dbconfig.php');

$fname = $_POST["fullname"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$rpass = $_POST["rpass"];
$sql="";


if($pass == $rpass)
{
$sql = "INSERT INTO user_master (FullName, email, Password)
VALUES ('".$fname."', '".$email."', '".$pass."')";

		if ($conn->query($sql) === TRUE) {
		  header("Location: index.php");
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
}
else
{
	
		echo "<script>
			alert('Password Not Match.');
			window.location.href='register.php';
			</script>";
	
}

?>