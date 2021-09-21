<?php require_once('connection.php'); ?>

<?php
	session_start();
	if($_SESSION["name"]!="yes"){
		header("location:../home.php");
	}
?>


<html>

<head>
	<title>Manager(add category)</title>
	<link rel="stylesheet" href="Mall_css.css" type="text/css">
	<link rel="stylesheet" href="add_cata_css.css" type="text/css">



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
 						    	 <a href="available_item_list">Available Stock in report view</a>
 				  	        	 <a href="#">Supplier Details</a>
 				     			 <a href="all_item_list.php">List of all items</a>
 				     			 <a href="sold_item.php">List of sold items</a>
 				   			</div>
				 	</li>
				 	
				 	

					<li class="nav_li"><a href="M_sk_contact.php"> CONTACT STORE KEEPER </a></li>
					<li class="nav_li"><a href="add_item.php"> ADD NEW ITEM </a></li>
					<li class="nav_li"><a class="active" href="M_add_category.php"> ADD NEW CATEGORY </a></li>
					
										
				 					 	
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

				<img src="../images/inventory1.png" class="inventory_image">

				<div class="itemcat_form">

				<table  class="itemcat_table" border=0 cellpadding="15px" cellspacing="2px">
						<form method="post" action="">

						<tr>
							<td><b>Category ID:</b> </td>
							<td><input type="text" name="c_id" id="name" placeholder="Enter the Category ID" size="30" maxlength="25"></td>
						</tr>


						<tr>
							<td><b>Category Name:</b> </td>
							<td><input type="text" name="c_name" id="name" placeholder="Enter the Category Name" size="30" maxlength="25"></td>
						</tr>
						
						<tr>
							<td><b>Select Supplier:</b> </td>

							<td><select name="s_name">

									<?php

									$suppliers="SELECT username FROM users";
									$rest=mysqli_query($con,$suppliers);

									while($row=mysqli_fetch_assoc($rest)){

													
										echo "<option>" .$row['username']."</option>"	;			

									}

									?>

							</td>

						</tr>

						
						<tr>
							<td colspan=2 align=center>
								<input type="Submit" value="send" id="btn" name="signB">
								<input type="reset" value="cancel" id="btn">
							</td>
						</tr>
			
						</form>
				</table>
				
				</div>
				

			</div>
		
	</div>

</body>
</html>



<?php
	if(isset($_POST['signB'])){

	$sql = "INSERT INTO category (category_id,category_name,supplier_name) VALUES ('".$_POST['c_id']."','".$_POST['c_name']."','".$_POST['s_name']."')";

	$result = mysqli_query($con,$sql);

	if($result)
		echo"<script> alert(' Sucess ') </script>";
	else
		echo"<script> alert(' failed ') </script>";

	}

?>


