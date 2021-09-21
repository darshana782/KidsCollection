<?php require_once('connection.php'); ?>


<?php
	session_start();
	if($_SESSION["name"]!="yes"){
		header("location:../home.php");
	}
?>


<html>

<head>
	<title>Manager(Inbox)</title>
	<link rel="stylesheet" href="inbox_css.css" type="text/css">
	<link rel="stylesheet" href="inbox_css2.css" type="text/css">


</head>

<body bgcolor="#3d3d3d">
	<div class="container">

		<div class="nav">

				<ul class="link_list_for_others" style="z-index: 1">
					 
					<li class="nav_li" style="float: left"><a class="active" href="Mhome.php"> Inbox </a></li>										
									
				 	
				 	
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
				 	
					<li class="nav_li"><a href="M_add_category.php"> ADD NEW CATEGORY </a></li>
				 	<li class="nav_li"><a href="add_item.php"> ADD NEW ITEM </a></li>				 	
					<li class="nav_li"><a href="M_sk_contact.php"> CONTACT STORE KEEPER </a></li>					
				 	
				 	<li class="nav_li" id="dropdown">
  					     <a> REVIEW </a>
				    	    <div class="content">
 						    	 <a href="available_item_list">Available Stock in report view</a>
 				  	        	 <a href="#">Supplier Details</a>
 				     			 <a href="all_item_list.php">List of all items</a>
 				     			 <a href="sold_item.php">List of sold items</a>
 				   			</div>
				 	</li>

				 	<li class="nav_li"><a href="Msuppliers.php"> SUPPLIERS </a></li>				 	
				 	<li class="nav_li"><a href="Mcusfeed.php"> CUSTOMER FEEDBACKS </a></li>				 	
				 	<li class="nav_li"><a href="Mone_by_one_stock.php?id=100"> STOCK </a></li>	

				</ul>
		</div>



			<div class="middle">

				<img src="../images/inbox_back_image.jpg" class="inbox_image">

				<a href="customer_msg.php"><img src="../images/cus_msg.png" class="cus_image" id="clipart"></a>
				<a href="sk_msg.php"><img src="../images/sk_msg.png" class="sk_image" id="clipart"></a>
				<a href="supp_msg.php"><img src="../images/sup_msg.png" class="sup_image" id="clipart"></a>


			</div>
		
	</div>





</body>
</html>


