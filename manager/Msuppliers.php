<?php require_once('connection.php'); ?>


<?php
	session_start();
	if($_SESSION["name"]!="yes"){
		header("location:../home.php");
	}
?>


<?php
	$data="SELECT * FROM users";
	$result=mysqli_query($con,$data);

?>



<html>

<head>
	<title>Manager(suppliers)</title>
	<link rel="stylesheet" href="Mall_css.css" type="text/css">
	<link rel="stylesheet" href="Msupplier_css.css" type="text/css">


</head>

<body bgcolor="#3d3d3d">
	<div class="container">

		<div class="nav">

				<ul class="link_list_for_others" style="z-index: 1">
									
					<li class="nav_li"><a href="Mone_by_one_stock.php?id=100"> STOCK </a></li>					
				 	<li class="nav_li"><a href="Mcusfeed.php"> CUSTOMER FEEDBACKS </a></li>
				 	<li class="nav_li"><a class="active" href="Msuppliers.php"> SUPPLIERS </a></li>
				 	<li class="nav_li" id="dropdown">
  					     <a> REVIEW </a>
				    	    <div class="content">
 						    	 <a href="available_item_list">Available Stock in report view</a>
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
				 		<a>
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

				<img src="../images/team.jpg" class="inventory_image">

				
				<table border="0" cellspacing="2px" cellpadding="2px" width="90%" class="suppplier_table">	

					<?php



						while($row=mysqli_fetch_assoc($result)){


							$x="SELECT * FROM user_duplicate";
							$re=mysqli_query($con,$x);

							$uname=$row['username'];

							while($ro=mysqli_fetch_assoc($re)){

								$un=$ro['username'];


								if($uname==$un){			
					?>
							
						<tr>
							<td class="columns">
								<div class="supplier_div">

									<img src="../images/images.png" class="sup_image"> <br>

									<?php    
														
									echo '<h1 align=center class=itemname> ' .$uname. '</h1>';

									?>

										

									<?php

										$out="SELECT * FROM new_suppliers WHERE username='$uname'";
										$res=mysqli_query($con,$out);

										$raw=mysqli_fetch_assoc($res);

										$fname=$raw['fname'];
										$lname=$raw['lname'];
										$ftp=$raw['fixed_tp'];
										$mtp=$raw['mobile_tp'];
										$email=$raw['email'];	
										$item=$raw['goods'];
										$uname=$raw['username'];

									echo '<p align=center class=itemname> Supplier Name : ' .$fname. ' ' .$lname.'</p> ';
									echo '<p align=center class=itemname> Telephone No : ' .$ftp. '</p> ';
									echo '<p align=center class=itemname> Mobile No : ' .$mtp. '</p> ';
									echo '<p align=center class=itemname> Email Address Name : ' .$email. '</p> ';
									echo '<p align=center class=itemname> Supplying Item : ' .$item. '<br><br>   

										 	 <a href=Mcontact_supplier.php?name='.$uname.'><button id=btn>Contact Supplier</button></a> <br><br>
											 <a href=delete_user.php?name='.$uname.'><button id=btn>Delete User</button></a> 

										  </p> <hr color=aqua>';

									?>


								</div>
							</td>
						
						</tr>				

					<?php	

								}
							}
					}
					
					?>	
				</table>

			</div>
		
	</div>





</body>
</html>
