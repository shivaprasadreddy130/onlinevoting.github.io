

<?php
session_start();
include('connect.php');

$votes=$_POST['gvotes'];
$total_votes=$votes+1;
$gid=$_POST['gid'];
$uid=$_SESSION['userdata']['id'];

$update_votes=mysqli_query($conn,"UPDATE user set votes='$total_votes' where id='$gid'");

$update_user=mysqli_query($conn,"UPDATE user set status=1 where id='$uid'");

if ($update_user and $update_votes) 
{

	$groups=mysqli_query($conn,"SELECT * from user where role=2 ");

	$groupsdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);

	$_SESSION['userdata']['status'] = 1;
	$_SESSION['groupsdata']=$groupsdata;


echo  '<script>
			alert("voting successfull");
			window.location="../dashboard.php"; 
	     </script>';


}
else
{
	echo  '<script>
			alert("some error occured");
			window.location="../dashboard.php"; 
	     </script>';
}

?>