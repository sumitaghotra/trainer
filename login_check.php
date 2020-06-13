<?php
include('dbconfig.php');

$email = $_POST["email"];
$pass = $_POST["password"];
$sql="";



$sql = "select id,Fullname,UserType from user_master where email='".$email."' and Password='".$pass."'";
 $result = mysqli_query($conn,$sql);
  $count = mysqli_num_rows($result);
  if($count == 1) 
  {
    echo "login success";
	session_start();
	while($row = $result->fetch_assoc()) {
    $fullname = $row["Fullname"];
	$sid= $row["id"];
	$UserType= $row["UserType"];
	//echo "Welcome ".$fullname;
	
	$_SESSION['suser'] = $fullname;
	$_SESSION['sid'] = $sid;
	
	if($UserType=="admin")
	{
		header('Location: Admin/index.php');
	}
	else if($UserType=="Client")
	{
		header('Location: Client/index.php');
	}
	else
	{
		$_SESSION['uid'] = $sid;
		header('Location: User/index.php');
	}

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