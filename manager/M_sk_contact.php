<?php require_once('connection.php'); ?>


<?php
	session_start();
	if($_SESSION["name"]!="yes"){
		header("location:../home.php");
	}
?>



<html>

<head>
	<title>Manager(contact sk)</title>
	<link rel="stylesheet" href="Mall_css.css" type="text/css">
	<link rel="stylesheet" href="M_sk_contact_css.css" type="text/css">


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
				 	
					<li class="nav_li"><a class="active" href="M_sk_contact.php"> CONTACT STORE KEEPER </a></li>
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

				<img src="../images/back_image.jpg" class="back_image">
				
				<div class="content1" align="center">
				
					<form method="post" id="fback" action="">
				
				
				
						<label>Date:</label><br>
							<input type="date" name="date" id="date">
							<br>
							<br>
					
				
						<label>Message:</label><br>
							<textarea name="message" type="message-box" rows="10" cols="55" placeholder="Write your message here.."></textarea><br><br>


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

	$sql = "INSERT INTO m_to_sk_msg (msg_date,msg) VALUES ('".$_POST['date']."','".$_POST['message']."')";

	$result = mysqli_query($con,$sql);

	if($result)
		echo"<script> alert(' Sucess ') </script>";
	else
		echo"<script> alert(' failed ') </script>";

	}

?>


