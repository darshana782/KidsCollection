<?php require_once('connection.php'); ?>


<?php
	session_start();
	if($_SESSION["name"]!="yes"){
		header("location:../home.php");
	}
?>



<?php
	$data="SELECT * FROM buyes_feedbacks";
	$result=mysqli_query($con,$data);


?>



<html>

<head>
	<title>Manager(suppliers)</title>
	<link rel="stylesheet" href="Mall_css.css" type="text/css">
	<link rel="stylesheet" href="Mfback_css.css" type="text/css">



</head>

<body bgcolor="#3d3d3d">
	<div class="container">

		<div class="nav">


				<div class="fback_heading">
					<h1>Customer Feedbacks</h1>
				</div>	


				<ul class="link_list_for_others" style="z-index: 1">
									
					<li class="nav_li"><a href="Mone_by_one_stock.php?id=100"> STOCK </a></li>					
				 	<li class="nav_li"><a  class="active" href="Mcusfeed.php"> CUSTOMER FEEDBACKS </a></li>
				 	<li class="nav_li"><a href="Msuppliers.php"> SUPPLIERS </a></li>
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


				<img src="../images/fback1.jpg" class="fback_img">


				<div class="fback_div">

					<table class="fback_table"  border="0" width="100%" cellspacing="25px" cellpadding="0px">


					<?php
						while($row=mysqli_fetch_assoc($result)){
							$item_id=$row['item_code'];
							$num=$row['feedback_no'];

					?>

							<tr>

								<td rowspan="8" width="30%"> <?php    
														$image="SELECT image_name FROM items WHERE item_code=$item_id";
														$image_result=mysqli_query($con,$image);  

														$raw=mysqli_fetch_assoc($image_result);

														echo '<img src=uploads/'.$raw['image_name'].' width=100%>';



								     			 ?>  
								</td>

								<td>
									<?php  

										$item_name="SELECT item_name FROM items WHERE item_code=$item_id";
										$item_name_result=mysqli_query($con,$item_name);

										$raw=mysqli_fetch_assoc($item_name_result);	

										echo '<h3 style=color:#f75d20 align=center class=fback_item_name> Item Name : ' .$raw['item_name']. '</h3>';

						         	?>						         	
						         </td>


							</tr>

							<tr>

								<td> 

									<?php  


										$buyer_name="SELECT name FROM buyes_feedbacks WHERE feedback_no=$num";
										$buyer_name_result=mysqli_query($con,$buyer_name);

										$raw=mysqli_fetch_assoc($buyer_name_result);	

										echo '<h3 align=center class=fback_item_name> Buyer Name : ' .$raw['name']. '</h3>';

						         	?>	

								</td>
							
							</tr>

							<tr>

								<td> 

										<?php  

										$fb="SELECT feedback FROM buyes_feedbacks WHERE feedback_no=$num";
										$fb_result=mysqli_query($con,$fb);

										$raw=mysqli_fetch_assoc($fb_result);	

										echo '<p align=center class=fb> Buyer Feedback :  <br><br>' .$raw['feedback']. '</p>';

						         	?>

								</td>
							
							</tr>

						
							<tr>
								<td>
									<?php echo "<a href =delete_fback.php?id='".$num."' > <button id=btn name=dlt> Delete Feedback </button> </a>";  ?>
								</td>
							</tr>

							<tr>
								
								<td>
									<?php
										echo"<hr color=aqua>";
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






