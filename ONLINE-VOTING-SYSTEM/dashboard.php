<?php

session_start();
if(!isset($_SESSION['userdata']))
{
 
	header("location:../");


}

$userdata=$_SESSION['userdata'];
$groupsdata=$_SESSION['groupsdata'];

if ($_SESSION['userdata']['status']== 0) 
{
	$status='<b style="color:red"> NOT VOTED</b>';
}
else
{
	$status='<b style="color:green">VOTED</b>';
}


?>






<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ONLINE VOTING SYSTEM</title>

	<style type="text/css">
		
		body
		{
			
			background-color: #379693;
		}

		#back
		{
			padding: 5px;
			font-size: 15px;
			background-color: #3498db;
			color: white;
			border-radius: 5px;
			float: left;
			padding-left:;
			margin: 10px;
		}
		#logout
		{
			padding: 5px;
			font-size: 15px;
			background-color: #3498db;
			color: white;
			border-radius: 5px;	
			float: right;
			margin: 10px;
		}
			#Profile
			{
				background-color: white;
				width: 33%;
				padding: 20px;
				float: left;

			}
			#Profile img{
				border-radius: 20px;
			}
			#Group
			{
				background-color: white;
				width: 60%;
				padding: 20px;
				float: right;
				
			}
			#votebtn
			{
			padding: 5px;
			font-size: 15px;
			background-color: #3498db;
			color: white;
			border-radius: 5px;
			}

			#Group{
				border-radius: 6px;
			}
			#Group img
			{
				float: right;
				border-radius: 10px;
				height: 190px;
				width: 190px;
			}
     		#mainpanel
     		{
     			padding: 20px;
     		}
     		#mainsection
     		{
     			padding: 10px;
     		}
     		#voted
     		{
     		padding: 5px;
			font-size: 15px;
			background-color: green;
			border-radius: 5px;
			margin: 10px;
			color: white;
		
			
			
     		}

	</style>
</head>
<body>

<div id="mainsection">
	<div id="headersection">
		<center>
		<a href="../"><button id="back">back</button></a>
		<a href="api/logout.php"><button id="logout">logout</button></a>
		<h1>online voting system</h1>
		<hr>
	</center>
		
	</div>
<div id="mainpanel">
	
<div id="Profile">

	<center> <img src="api/uploads/<?php echo $userdata['photo']; ?>" height="" width="">	<br> <br></center> 
	<b> Name:</b><?php echo $userdata['name']; ?>  <br> <br>
	<b> mobile:</b> <?php echo $userdata['mobile']; ?>	<br><br>
	<b> address:</b> <?php echo $userdata['address']; ?> 	 <br><br>
	<b> status:</b> <?php echo $status; ?> 		<br><br>
</div>


		<div id="Group">

			
			<?php
				if ($_SESSION['groupsdata']) {
					for($i=0;$i<count($groupsdata);$i++)
					{
			?>
					<div>
						<img src="api/uploads/<?php echo $groupsdata[$i]['photo']  ?>" height="" width=""> <br> <br> 
						<b>GROUP NAME :: </b><?php echo $groupsdata[$i]['name'];?> <br> <br>

						<b>VOTES ::</b> <?php echo $groupsdata[$i]['votes'];?> <br> <br>
						<form action="api/voting.php" method="POST">
							<input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes'] ?>"> <br> <br>
							<input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id'] ?>"> <br> <br>

								<?php
									if ($_SESSION['userdata']['status']==0) {
										?>
										
										<input type="submit" name="votebtn" value="vote" id="votebtn">
										<?php
									}
									else{
										?>
									<button disabled type="button" name="votebtn" value="vote" id="voted"> Voted</button> 
										<?php
									}


								?>

							
						</form>
					</div>	
					<hr>
					<?php
					}
				}
				else
				{

				}
					?>
		</div>

</div>





</div>
</body>
</html>