<?php require_once('connection.php'); ?>


<?php
	session_start();
	if($_SESSION["name"]!="yes"){
		header("location:../home.php");
	}
?>


<?php
		$x=$_SESSION["user_id"];

		$uname="SELECT username FROM users WHERE user_id=$x";
		$re=mysqli_query($con,$uname);

		$out=mysqli_fetch_assoc($re);

		$name=$out['username'];


		echo $x;
		echo $name;
?>



<html>

<head>
	<title>Suppplier-Admin (contact)</title>
	<link rel="stylesheet" href="inbox_css.css" type="text/css">
	<link rel="stylesheet" href="M_sk_contact_css.css" type="text/css">



</head>

<body bgcolor="#3d3d3d">
	<div class="container">

		<div class="nav">

				<ul class="link_list_for_others" style="z-index: 1">			 				 	
				 	
				 	<li class="nav_li" style="float: right">
				 		<a href="logout_session.php"> 
				 			<img class="logoutB" src="../images/logout.png">
				 		</a>
				 	</li>
			 	
				 	<li class="nav_li"><a href="sup_inbox.php"> INBOX </a></li>
				 	<li class="nav_li"><a class="active" href="Scontact_admin.php"> CONTACT ADMIN </a></li>		
				 	<li class="nav_li"><a href="supplier_home.php"> HOME </a></li>	
				 	<li class="nav_li" style="float: left; color: yellow; position: absolute; top: 35%; font-size: 30px; font-weight: bold"> 
				 		<?php
				 			echo " Welcome " .$name. "...!";
				 		?>
				 	</li>
				</ul>
		</div>



			<div class="middle">

				<img src="../images/back_image.jpg" class="back_image">
				
				<div class="content1" align="center">
				
					<form method="post" id="fback" action="">
				
				
				
						<label>Date:</label><br>
							<input type="date" name="date" id="date" required>
							<br>
							<br>
					
				
						<label>Message:</label><br>
							<textarea name="message" type="message-box" rows="10" cols="60" placeholder="Write your message here.." required></textarea><br><br>


							<input type="submit" value="Submit" id="btn" name="signB">
							<input type="reset" value="cancel" id="btn">
							<br>
					</form>

				</div>

			</div>
		
	</div>

</body>
</html>



<?php
	if(isset($_POST['signB'])){

	$sql = "INSERT INTO sup_to_admin VALUES ($x,'$name','".$_POST['date']."','".$_POST['message']."')";

	$result = mysqli_query($con,$sql);

	if($result)
		echo"<script> alert(' Sucess ') </script>";
	else
		echo"<script> alert(' failed ') </script>";

	}

?>


