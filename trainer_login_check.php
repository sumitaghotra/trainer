<?php
include('dbconfig.php');

$email = $_POST["email"];
$pass = $_POST["password"];

$sql = "select id,FirstName from trainer_master where email='".$email."' and Password='".$pass."'";
echo $sql;
 $result = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($result);
		echo $count;
		
		if($count == 1) 
  {
    echo "login success";
	session_start();
	while($row = $result->fetch_assoc()) {
    $fullname = $row["FirstName"];
	$sid = $row["id"];
	//echo "Welcome ".$fullname;
	
	$_SESSION['suser'] = $fullname;
	$_SESSION['trainerID'] = $sid;
	header('Location: Trainer/index.php');
  }
  }
  else {
       // echo "<script> Your Login Name or Password is invalid </script> ";
			echo "<script>
			alert('Your Login Name or Password is invalid');
			window.location.href='index.php';
			</script>";
	
      }
?>