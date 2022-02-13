<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>online voting system_registration</title>

<style type="text/css">
		
		body
		{
			text-align: center;
			background-color: #b8e994;
		}
		input{
			padding: 10px;
			border-radius: 5px;
		}
		#address input{
			width: 30%;
		}
		
		#imagepart{
			border: 2px solid black;
			border-radius: 5px;
			padding: 10px;
			width: 30%;
			font-family: sans-serif;
			font-size: 20px;
		}
		#role{
			border-radius: 5px;
			padding: 10px;
			border: 2px solid black;
			width: 30%;
			font-size: 20px;

		}
		#role select{
			border-radius: 5px;
			padding: 5px;
			border: 2px solid black;

		}
		#b1
		{

			font-size: 20px;
			background-color: skyblue;
			border-radius: 5px;
		}

	</style>


</head>
<body>
	<h1>online voting system</h1>
	<hr>
	<h2>registration</h2>
	<form action="api/registerphp.php" method="POST" enctype="multipart/form-data">
		
		<input type="text" name="candidate" placeholder="enter name"> 
		<input type="number" name="mobile" placeholder="enter mobile"> <br> <br>
		<input type="password" name="password" placeholder="enter password">
		<input type="password" name="cpassword" placeholder="confirm password"><br> <br>
		<center>
		<div id="address">
		<input type="text" name="address" placeholder="address">  <br> <br>
		</div>

		<div id="imagepart"> 
		upload image:<input type="file" name="image"><br> <br>
		</div>
		  <br> 
		<div id="role">
			select role:<select name="role">
						
						<option value="1">Voter</option>
						<option value="2">Group</option>			
					</select><br> <br>
		</div>
		</center> <br> <br>
		<button id="b1">register</button> <br> <br>
		<h3>
		already user?<a href="index.php">login here</a>
	</h3>
	</form>

</body>
</html>