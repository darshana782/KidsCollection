<?php require_once('connection.php'); ?>






<html>

<head>
	<title>login</title>
	<link rel="stylesheet" href="gallery_css.css" type="text/css">


</head>

<body bgcolor="white">
	<div class="container">

				<ul class="link_list_for_others" style="z-index: 1">
					
					
					<li class="nav_li"><a href="contact.php"> CONTACT US </a></li>
					<li class="nav_li"><a href="about.php"> ABOUT US </a></li>
					<li class="nav_li"><a href="services.php"> SERVICES </a></li>
					<li style="float:left" class="nav_li"><a class="active" href="gallery.php?id=100"> GALLERY </a></li>
					<li class="nav_li"><a href="home.php"> HOME </a></li>

				</ul>



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
												
										echo "<li class=left_nav_li><a href=gallery.php?id=$cata_id>" .$row['category_name']."</a></li><br>"	;			

									}

					?>

				</ul>

				<div class="body_section">

					<ul class="for_search">
						<form method="POST" action="">
						<li class="search_li" id="product">Products </li>
						<li class="search_li"><input type="text" name="search_bar" size="75px" placeholder="Search..."></li>
						<li class="search_li"><input type="submit" name="search" value="Search" id="btn"> </li>
						</form>
					</ul>

					<div class="buyerdrop">
 						 <button class="buyerB">For Buyers</button>
							<div class="buyer-content">
 								<a href="buyer_fbacks.php">Buyer Feedbacks</a>
								<a href="leave_feedback.php">Leave Feedbacks</a>
								<a href="buyer_t&c.php">Terms & Conditions</a>
 							</div>
					</div>
				

					<div class="supplierdrop">
 						 <button class="supplierB">For Suppliers</button>
							<div class="supplier-content">
 								<a href="sign.php">Supplier Request</a>
								<a href="supplier_guide.php">New Supplier Guide</a>
								<a href="supplier_t&c.php">Terms & Conditions</a>
 							</div>
					</div>


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

										echo '<td align=center width=30%><img width=150px src=manager/uploads/'.$image.'>';
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

										echo '<td align=center width=30%><img width=150px src=manager/uploads/'.$image.'>';
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

				</div>

			</div>
		
	</div>





</body>
</html>


<?php
	
	if(isset($_POST['search'])){

		$search_list="INSERT INTO search_history(search_by) VALUES ('".$_POST['search_bar']."')";

		$result=mysqli_query($con,$search_list);

		if($result)
			echo "success";
		else
			echo "fail";
	}

?>