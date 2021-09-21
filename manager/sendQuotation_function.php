<?php require_once('connection.php'); ?>


<?php
	if(isset($_GET['id'])){

		$sql1 = "SELECT * FROM stock WHERE item_code =".$_GET['id'];
		$result = mysqli_query($con,$sql1);
		$row=mysqli_fetch_assoc($result);

		$name=$row['item_name'];
		$iid=$row['item_code'];
		$avail=$row['qty'];

			if($result){

				//echo"Sucessfull";
			}else{
				echo"failed";	
			}


		$sql = "SELECT supplier_id FROM items WHERE item_code =".$_GET['id'];
		$result = mysqli_query($con,$sql);
		$raw=mysqli_fetch_assoc($result);

		$sup_id=$raw['supplier_id'];

			if($result){

				//echo"Sucessfull";
			}else{
				echo"failed";	
			}

	}



if(isset($_POST['sendQ'])){

	$send_qty=$_POST['sendqty'];
	$DATE=$_POST['date'];

		$sold="INSERT INTO send_quota_to_supplier (sup_id,send_date,item_id,item_name,qty) VALUES('$sup_id','$DATE','$iid','$name','$send_qty')";
		$result2=mysqli_query($con,$sold);

		if($result2){

				header("location:send_quotation.php");
		}else{

				echo"<script> alert('Failed') </script>";
		}

}	

?>


<html>

<head>
	<title>Manager (send quotation)</title>
	<link rel="stylesheet" href="sendq_css.css" type="text/css">

</head>

<body bgcolor="#3d3d3d">
	<div class="container">

		

				<div class="nav">

				<ul class="link_list_for_others" style="z-index: 1">
					 
					<li class="nav_li" style="float: left"><a class="active" href=""> Send Quotation </a></li>										
									
				 	
				 	
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
						 		   		<a href="send_quotation.php">Send Quotation</a>
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
				 	<li class="nav_li"><a href="Mone_by_one_stock.php?id=100"> STOCK </a></li>	

				</ul>
		</div>

	


			<div class="middle">

				<img src="../images/update.jpg" class="update_img">    


				<div class="update_div">

						<table class="update_table"  border="0" width="100%" cellspacing="25px" cellpadding="0px">

							<form action='#' method ='POST'>

							<tr>
								<td align="center" class="column_name"><h1> Item Code </h1></td>
								<td align="center" class="column_name"><h1> Item Name </h1></td>
								<td align="center" class="column_name"><h1> Available Stock </h1></td>
								<td align="center" class="column_name"><h1> Required QTY </h1></td>
								<td align="center" class="column_name"><input type="date" name="date" id="date" required></td>

							</tr>

							
					
								<tr>
									<?php
										echo "<td><p align=center class=itemname name='id'>" .$row['item_code']. "</p></td>";
										echo '<td><p align=center class=itemname>' .$name. '</p></td>';
										echo '<td><p align=center class=itemname>' .$avail. '</p></td>';
										echo "<td align=center><input type = 'text' name='sendqty' size=10% required></td>";
									?>
					
								<td align="center" colspan =3><input type='submit' value="SEND" name='sendQ' id="btn"></td>

								</tr>
		
							</form>
						</table>


				</div>				

			</div>
		
	</div>


</body>
</html>