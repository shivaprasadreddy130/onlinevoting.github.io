
<?php

 session_start();
include("connect.php");

$mobile=$_POST['mobile'];
$password=$_POST['password'];
$role=$_POST['role'];

$check=mysqli_query($conn,"SELECT * from user where mobile='$mobile' and password='$password' and role='$role'");

if (mysqli_num_rows($check)>0)
 {
 	$userdata=mysqli_fetch_array($check);

	$groups=mysqli_query($conn,"SELECT * from user where role=2 ");

	$groupsdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);

	$_SESSION['userdata']=$userdata;
	
	$_SESSION['groupsdata']=$groupsdata;

	echo  '<script>
			window.location="../dashboard.php"; 
	     </script>';

}
else
{
	echo  '<script>
			alert("invalid credentials or no user found");
			window.location="../"; 
	     </script>';
}
?>