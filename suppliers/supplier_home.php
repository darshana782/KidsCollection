<?php require_once('connection.php'); ?>


<?php
	session_start();
	if($_SESSION["name"]!="yes"){
		header("location:../home.php");
	}
?>

<?php
	$tot=0;
	
	$x=$_SESSION["user_id"];


	$sql="SELECT * FROM items WHERE supplier_id=$x";
	$res=mysqli_query($con,$sql);



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
	<link rel="stylesheet" href="sup_home_css.css" type="text/css">



</head>

<body>
	<div class="container">

		<div class="nav">

				<ul class="link_list_for_others" style="z-index: 1">			 				 	
				 	
				 	<li class="nav_li" style="float: right">
				 		<a href="logout_session.php"> 
				 			<img class="logoutB" src="../images/logout.png">
				 		</a>
				 	</li>
			 	
				 	<li class="nav_li"><a href="sup_inbox.php"> INBOX </a></li>
				 	<li class="nav_li"><a href="Scontact_admin.php"> CONTACT ADMIN </a></li>		
				 	<li class="nav_li"><a class="active" href="supplier_home.php"> HOME </a></li>	
				 	<li class="nav_li" style="float: left; color: yellow; position: absolute; top: 35%; font-size: 30px; font-weight: bold"> 
				 		<?php
				 			echo " Welcome " .$name. "...!";
				 		?>
				 	</li>
				</ul>
		</div>

			<div class="middle">

				<div class="table_container">
					
					<table class="table_home" border="0" cellpadding="2px" cellspacing="5px" align="center">

						<?php

							while($raw=mysqli_fetch_assoc($res)){

								$image=$raw['image_name'];
								$i_name=$raw['item_name'];
								$i_code=$raw['item_code'];

								$avail=mysqli_query($con,"SELECT qty FROM stock WHERE item_code=$i_code");
								$avail_qty=mysqli_fetch_assoc($avail);

								$sold=mysqli_query($con,"SELECT * FROM daily_update WHERE item_id=$i_code");
								

									while($sold_qty=mysqli_fetch_assoc($sold)){
										$tot=$tot+$sold_qty['qty'];
									}
						?>

						<tr>
							<td rowspan="2" align="center" height="30%" width="30%">

								<?php
									echo "<img src=../manager/uploads/$image class=item_image>";
								?>
								
							</td>

							<td align="center" width="50%" height="50%">

								<?php
									echo "<h1>" .$i_name. "</h1>";
								
									echo " Available Stock : " .$avail_qty['qty'];
						
									echo "<br>Sold Stock : " .$tot;

									echo "<br><br><a href=send_items.php?id='".$i_code."'><button name=sendB id=btn>Send New Stock</button></a>";
								?>
								
							</td>
						</tr>
						

						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td colspan="2">
								<hr color="navy">
							</td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>


						<?php

							$tot=0;


							}


						?>	
						
					</table>

				</div>
				
			</div>
		
	</div>

</body>
</html>


<?php

	if(isset($_POST['subB'])){

	}
?>