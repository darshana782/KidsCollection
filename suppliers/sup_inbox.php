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



	$sql="SELECT * FROM manager_to_supplier WHERE supplier='$name'";
	$result=mysqli_query($con,$sql);

	$sql2="SELECT * FROM send_quota_to_supplier WHERE sup_id=$x";
	$result2=mysqli_query($con,$sql2);	


?>



<html>

<head>
	<title>Suppplier-Admin (contact)</title>
	<link rel="stylesheet" href="inbox_css.css" type="text/css">
	<link rel="stylesheet" href="s_inbox_css.css" type="text/css">



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
			 	
				 	<li class="nav_li"><a class="active" href="sup_inbox.php"> INBOX </a></li>
				 	<li class="nav_li"><a href="Scontact_admin.php"> CONTACT ADMIN </a></li>		
				 	<li class="nav_li"><a href="supplier_home.php"> HOME </a></li>	
				 	<li class="nav_li" style="float: left; color: yellow; position: absolute; top: 35%; font-size: 30px; font-weight: bold"> 
				 		<?php
				 			echo " Welcome " .$name. "...!";
				 		?>
				 	</li>	

				</ul>
		</div>



			<div class="middle">

				<div class="left">

					<table class="left_table" border="0" align="center" width="90%">

						<tr>
							<td colspan="2" align="center">
								<h1 align="center">
									Messages
								</h1>
							</td>
						</tr>

						<tr>
							<td align="center">
								<h3 align="center">
									Date
								</h3>
								<hr color="red">									
							</td>

							<td align="center">
								<h3 align="center">
									Message
								</h3>
								<hr color="red">
							</td>
						</tr>

						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>

						<?php
							while($row=mysqli_fetch_assoc($result)){

							echo "<tr>
										<td align=center>"
												.$row['msg_date'].
										"</td>

										<td>"
												.$row['msg'].
										"</td>
								  </tr>";
						?>
						

						<tr></tr>
						<tr>
							<td colspan="2">
								<hr color="navy">
							</td>
						</tr>
						<tr></tr>

						<?php

							}

						?>	
					</table>
					
				</div>


				<div class="right">
					<table class="right_table" border="0" align="center" width="90%">

						<tr>
							<td colspan="4" align="center">
								<h1 align="center">
									Requested Items
								</h1>
							</td>
						</tr>

						<tr>
							<td align="center">
								<h3 align="center">
									Date
								</h3>
								<hr color="red">									
							</td>

							<td align="center">
								<h3 align="center">
									Item Id
								</h3>
								<hr color="red">
							</td>

							<td align="center">
								<h3 align="center">
									Item Name
								</h3>
								<hr color="red">
							</td>

							<td align="center">
								<h3 align="center">
									 QTY
								</h3>
								<hr color="red">
							</td>
						</tr>

						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>

						<?php
							while($raw=mysqli_fetch_assoc($result2)){

							echo "<tr>
										<td align=center>"
												.$raw['send_date'].
										"</td>

										<td align=center>"
												.$raw['item_id'].
										"</td>

										<td align=center>"
												.$raw['item_name'].
										"</td>

										<td align=center>"
												.$raw['qty'].
										"</td>
								  </tr>";
						?>
						

						<tr></tr>
						<tr>
							<td colspan="4">
								<hr color="navy">
							</td>
						</tr>
						<tr></tr>

						<?php

							}

						?>	
					</table>
					
				</div>

			</div>
		
	</div>

</body>
</html>




