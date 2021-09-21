<?php
	$con=mysqli_connect("localhost","root","","kids_collection") or die('connection failed');
?>

<?php
	session_start();
	if($_SESSION["name"]!="yes"){
		header("location:../home.php");
	}
?>



<?php
	$data="SELECT * FROM items";
	$result=mysqli_query($con,$data);


?>


<html>

<head>
	<title>SK(update)</title>
	<link rel="stylesheet" href="inbox_css.css" type="text/css">
	<link rel="stylesheet" href="Supdate_css.css" type="text/css">


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

				 	<li class="nav_li" style="float: right">
				 		<a href="Sinbox.php">
				 			 <img class="notimage" src="../images/noti.png">
				 		</a>
				 				  <span id="notifi"> 
				 		  				1 
						 		  </span> 

				 	</li>

				 	<li class="nav_li"><a href="sk_sold_items.php"> SOLD ITEMS </a></li>					 	
				 	<li class="nav_li"><a href="Scontact_admin.php"> CONTACT ADMIN </a></li>				 	
				 	<li class="nav_li"><a class="active" href="Supdate.php"> UPDATE STOCK </a></li>	

				</ul>
		</div>



			<div class="middle">

				<img src="../images/update.jpg" class="update_img">    				


				<div class="update_div">

					<table align="center" class="update_table"  border="0" width="80%" cellspacing="3px" cellpadding="0px">


						<tr>
							<td align="center" class="column_name"><h1> Item Image </h1></td>
							<td align="center" class="column_name"><h1> Item Code </h1></td>							
							<td align="center" class="column_name"><h1> Item Name </h1></td>
							<td align="center" class="column_name"><h1> Available QTY </h1></td>
							<td width="20%" align="center" class="column_name"><h1>   </h1></td>
							
						</tr>


						<tr></tr>
						<tr></tr>

					<?php
						while($row=mysqli_fetch_assoc($result)){
							$item_id=$row['item_code'];

					?>

							<tr>

								<td rowspan="5" width="20%" align="center" > <?php    
														$image="SELECT image_name FROM items WHERE item_code=$item_id";
														$image_result=mysqli_query($con,$image);  

														$raw=mysqli_fetch_assoc($image_result);

														echo '<img src=../manager/uploads/'.$raw['image_name']. ' width=60%>';



								     			 ?>  
								</td>

								<td align="center" > <?php    
														
														echo '<p align=center class=itemname> ' .$item_id. '</p>';

									     			 ?>  
								</td>

								<td align="center" >
									<?php  

										$item_name="SELECT item_name FROM items WHERE item_code=$item_id";
										$item_name_result=mysqli_query($con,$item_name);

										$raw=mysqli_fetch_assoc($item_name_result);	

										$i_name=$raw['item_name'];

										echo '<p align=center class=itemname> ' .$i_name. '</p>';

						         	?>						         	
						         </td>


						         <td align="center" >
									<?php  

										$stock="SELECT qty FROM stock WHERE item_code=$item_id";
										$rest1=mysqli_query($con,$stock);

										$raw=mysqli_fetch_assoc($rest1);	

										$avail=$raw['qty'];

										echo '<p align=center class=itemname> ' .$avail. '</p>';

						         	?>						         	
						         </td>


						         <?php
						         	echo "
						         		<td align=center >
						         			<a href=update_stock.php?id='".$row['item_code']."'><button id=btn>UPDATE</button>
						         			<a href=transaction.php?id='".$row['item_code']."'><button id=btn>SOLD</button>
						         		</td> ";

						         ?>

							</tr>

							<tr></tr>
							<tr>
								<td colspan="3">
									<?php
										echo"<hr color=#b82bff>";
									?>
								</td>
							</tr>
							<tr></tr>
							<tr></tr>
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







