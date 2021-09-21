<?php require_once('connection.php'); ?>


<?php
	session_start();
	if($_SESSION["name"]!="yes"){
		header("location:../home.php");
	}
?>


<?php
	$data="SELECT * FROM new_suppliers";
	$result=mysqli_query($con,$data);
?>



<html>

<head>
	<title>Manager(suppliers)</title>
	<link rel="stylesheet" href="Mall_css.css" type="text/css">
	<link rel="stylesheet" href="Mnew_supplier_rqst_css.css" type="text/css">


</head>

<body bgcolor="#3d3d3d">
	<div class="container">

		<div class="nav">

				<ul class="link_list_for_others" style="z-index: 1">
									
					<li class="nav_li"><a href="Mone_by_one_stock.php?id=100"> STOCK </a></li>					
				 	<li class="nav_li"><a href="Mcusfeed.php"> CUSTOMER FEEDBACKS </a></li>
				 	<li class="nav_li"><a href="Msuppliers.php"> SUPPLIERS </a></li>
				 	<li class="nav_li" id="dropdown">
  					     <a> REVIEW </a>
				    	    <div class="content">
 						    	 <a href="#">Available Stock in report view</a>
 				  	        	 <a href="#">Supplier Details</a>
 				     			 <a href="all_item_list.php">List of all items</a>
 				     			 <a href="sold_item.php">List of sold items</a>
 				   			</div>
				 	</li>
				 	
					<li class="nav_li"><a href="M_sk_contact.php"> CONTACT STORE KEEPER </a></li>	
					<li class="nav_li"><a href="add_item.php"> ADD NEW ITEM </a></li>
					<li class="nav_li"><a href="M_add_category.php"> ADD NEW CATEGORY </a></li>
					
									
				 	
				 	<li class="nav_li" style="float: right">
				 		<a href="logout_session.php"> 
				 			<img class="logoutB" src="../images/logout.png">
				 		</a>
				 	</li>

				 	<li class="nav_li" id="dropdown1" style="float: right">
				 		<a class="active" >
				 			 <img class="notimage" src="../images/noti.png">
				 		</a>	 

				 				 <div class="noti_content">
						 		   		<a href="send_quotation.php">Send Quotations</a>
 				  	        			<a href="inbox.php">Inbox</a> 
 				  	        			<a href="Mnew_supplier_rqst.php">Supplier Request</a> 						 		   

						 		  </div>


				 				  <span id="notifi"> 
				 		  				1 
						 		  </span> 

				 	</li>

				</ul>
		</div>



			<div class="middle">

				<img src="../images/reg.jpg" class="inventory_image">

				<div>


					<table border="0" cellspacing="0px" cellpadding="2px" width="90%" class="suppplier_table">					
						<tr>
							<td  class="columns">First name</td>
							<td class="columns">Last name</td>
							<td class="columns">NIC</td>
							<td class="columns">Age</td>
							<td class="columns">Email</td>
							<td class="columns">Telephone Number</td>
							<td class="columns">Mobile Number</td>
							<td class="columns">Gender</td>
							<td class="columns">experience</td>
							<td class="columns">Item Name</td>
							<td class="columns">Import From</td>
							<td></td>							
							<td></td>							
						</tr>

						<tr></tr>



						<?php
						while($row=mysqli_fetch_assoc($result)){

							$fn=$row['fname'];
							$ln=$row['lname'];
							$id=$row['id'];
							$age=$row['age'];
							$email=$row['email'];
							$tn=$row['fixed_tp'];
							$mn=$row['mobile_tp'];
							$sex=$row['sex'];
							$ex=$row['ex_year'];
							$in=$row['goods'];
							$imp=$row['import_from'];

						?>	

						<tr>
							<td>
								<?php    
														
									echo '<p align=center class=itemname> ' .$fn. '</p>';

								?> 
							</td>

							<td>
								<?php    
														
									echo '<p align=center class=itemname> ' .$ln. '</p>';

								?>
									
							</td>
							
							<td>
								<?php    
														
									echo '<p align=center class=itemname> ' .$id. '</p>';

								?>
									
							</td>

							<td>
								<?php    
														
									echo '<p align=center class=itemname> ' .$age. '</p>';

								?>
									
							</td>

							<td>
								<?php    
														
									echo '<p align=center class=itemname> ' .$email. '</p>';

								?>
									
							</td>

							<td>
								<?php    
														
									echo '<p align=center class=itemname> ' .$tn. '</p>';

								?>
									
							</td>

							<td>
								<?php    
														
									echo '<p align=center class=itemname> ' .$mn. '</p>';

								?>
									
							</td>

							<td>
								<?php    
														
									echo '<p align=center class=itemname> ' .$sex. '</p>';

								?>
									
							</td>

							<td>
								<?php    
														
									echo '<p align=center class=itemname> ' .$ex. '</p>';

								?>
									
							</td>

							<td>
								<?php    
														
									echo '<p align=center class=itemname> ' .$in. '</p>';

								?>
									
							</td>

							<td>
								<?php    
														
									echo '<p align=center class=itemname> ' .$imp. '</p>';

								?>
									
							</td>


							<!-- <td>

									<?php echo "<a href =delete_supplier_request.php?id='".$id."' > <button id=btn name=dlt> Delete Request </button> </a>";  ?>
								
							</td> -->	


							<td>
								
									<?php echo "<a href =apply_request.php?id='".$id."' > <button id=btn name=dlt> Approve </button> </a>";  ?>

							</td>							

							
						</tr>


					<?php

					}
					?>

					</table>
				
				</div>	

			</div>
		
	</div>





</body>
</html>


