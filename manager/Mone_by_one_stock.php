<?php require_once('connection.php'); ?>


<?php
	session_start();
	if($_SESSION["name"]!="yes"){
		header("location:../home.php");
	}
?>


<html>

<head>
	<title>Manager(home)</title>

	<link rel="stylesheet" href="Mhome_css.css" type="text/css">
	<link rel="stylesheet" href="Mall_css.css" type="text/css">

</head>

<body bgcolor="white">
	<div class="container">
		<div class="nav">

				<ul class="link_list_for_others" style="z-index: 1">
									
					<li class="nav_li"><a class="active" href="Mone_by_one_stock.php?id=100"> STOCK </a></li>					
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

				<ul class="left_nav">

					<h2>Category</h2>

					<br>
					<br>
					<br>

					<?php

									$cata="SELECT * FROM category";
									$rest=mysqli_query($con,$cata);

									while($row=mysqli_fetch_assoc($rest)){

										$cata_id=$row['category_id'];
												
										echo "<li class=left_nav_li><a href=Mone_by_one_stock.php?id=$cata_id>" .$row['category_name']."</a></li><br>"	;			

									}

					?>

				</ul>


				<!--<div class="main_home"> -->
					
					<div class="home_content">

						<table border="0" width="95%" align="center" class="gallery_item_table" cellspacing="10px" cellpadding="0px">

							<tr>

						<?php

							$x="SELECT category_name FROM category WHERE category_id=".$_GET['id'];
							$res=mysqli_query($con,$x);

							$y=mysqli_fetch_assoc($res);
							$cata_name=$y['category_name'];

							
							$all="SELECT * FROM items WHERE category='$cata_name'";
							$out=mysqli_query($con,$all);

							$count=-1;



							while($raw=mysqli_fetch_assoc($out)){

								$image=$raw['image_name'];
								$iname=$raw['item_name'];
								$price=$raw['item_price'];
								$supplier=$raw['supplier_name'];
								$idesc=$raw['item_description'];
								$icode=$raw['item_code'];

								$a="SELECT qty FROM stock WHERE item_name='$iname'";
								$rslt=mysqli_query($con,$a);

								$RAW=mysqli_fetch_assoc($rslt);
								$avail=$RAW['qty'];


									$count++;

									if($count%3==0){

										echo "</tr> <tr>";

										echo '<td align=center width=30%><img width=150px src=uploads/'.$image.'>';
										echo '
													<h2 class=inside_texts>'
														.$iname.
													'</h2>';

										echo '
													<p  class=pinside_texts>Item Code : '
														.$icode.
													'</p>';
													


										echo '
													<p  class=pinside_texts>Item price : $'
														.$price.
													'</p>';

										echo '
													<p class=pinside_texts>Supplier Username : '
														.$supplier.
													'</p>';	


										echo '
													<p class=avail_stock>Available Stock : '
														.$avail.
													'</p>';	
																

										echo '
													<p style=color:navy;font-size:20px;font-weight:bold><u> Description  </u></p> <p style=font-weight:bold;color:#ff442b>'
														.$idesc.
													'</p><br><br>
											  </td>';

									}else{

										echo '<td align=center width=30%><img width=150px src=uploads/'.$image.'>';
										echo '
													<h2 class=inside_texts>'
														.$iname.
													'</h2>';

										echo '
													<p  class=pinside_texts>Item Code : '
														.$icode.
													'</p>';
																

										echo '
													<p  class=pinside_texts>Item price : $'
														.$price.
													'</p>';

										echo '
													<p class=pinside_texts>Supplier Username : '
														.$supplier.
													'</p>';


										echo '
													<p class=avail_stock>Available Stock : '
														.$avail.
													'</p>';



										echo '
													<p style=color:navy;font-size:20px;font-weight:bold><u> Description  </u></p> <p style=font-weight:bold;color:#ff442b>'
														.$idesc.
													'</p><br><br>
											  </td>';	    	  

									}
							}
						?>	

						</table>

					</div>

		<!--		</div>-->


			</div>
		
	</div>


</body>
</html>


