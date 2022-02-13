<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online voting system</title>

	<style type="text/css">
		
		body
		{
			text-align: center;
			background-color: #b8e994;
		}

		#headerSection{
			padding: 5px;
		}
		#headerSection h1{
			font-family: cursive;
		}
		input{
			padding: 10px;
			border-radius: 5px;
		}
		#dropbox
		{
			padding: 10px;
			border-radius: 5px;
			width: 12%;
		}
		#loginbtn{
			padding: 5px;
			font-size: 15px;
			background-color: #3498db;
			color: white;
			border-radius: 5px;
		}

	</style>
</head>
<body>

	<div id="headerSection">
		
		<h1>ONLINE VOTING SYSTEM</h1>

	<br>
	</div>
	
	<div id="bodySection">
		

	<form action="api/login.php" method="POST">
		<h2>login</h2>
		<input type="number" name="mobile" placeholder="enter mobile"> <br> <br>
		<input type="password" name="password" placeholder="enter password"> <br> <br>
		<select name="role" id="dropbox">
			<option value="1">Voter</option>
			<option value="2">group</option>
			
		</select ><br><br>
		<button id="loginbtn">login</button><br> <br>
		NEW USER?<a href="register.php"><h4>register here</h4></a>

	</form>

	</div>



</body>
</html>