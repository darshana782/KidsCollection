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
						         			<a href=sendQuotation_function.php?id='".$row['item_code']."'><button id=btn>SEND QUOTATION</button>
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







