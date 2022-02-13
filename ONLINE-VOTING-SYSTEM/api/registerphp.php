
<?php

include("connect.php");

$name=$_POST['candidate'];

$mobile=$_POST['mobile'];

$password=$_POST['password'];

$cpassword=$_POST['cpassword'];

$address=$_POST['address'];

$image= $_FILES['image']['name'];

$tmp_name = $_FILES['image']['tmp_name'];

$role=$_POST['role'];


if ($password==$cpassword) {
	move_uploaded_file($tmp_name,"uploads/$image");

	$sql="insert into user(name,mobile,password,address,photo,role,status,votes) values('$name','$mobile','$password','$address','$image','$role',0,0)";

	$insert=mysqli_query($conn,$sql);

	/*if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/


	if ($insert) {

		echo ' <script>
				alert("registration successfull");
				window.location="../index.php";

			</script>';
		
	}
	else
	{
		echo '<script>  

			alert("some error occured");
			window.location="../register.php";
		</script>';
	}
}
else
{
	echo  '<script>
			alert("password and confirm password are wrong");
			window.location="../register.php"; 
	     </script>';
}



?>