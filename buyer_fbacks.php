<?php
	$con=mysqli_connect("localhost","root","","kids_collection") or die('connection failed');
?>


<?php
	$data="SELECT * FROM buyes_feedbacks";
	$result=mysqli_query($con,$data);

	$no=0;

?>


<html>

<head>
	<title>User | buyer feedbacks</title>

	<link rel="stylesheet" href="fback_css.css" type="text/css">

</head>

<body bgcolor="#363c45">
	<div class="container">

				<ul class="link_list_for_others">
					
					<li style="float:left" class="nav_li"><a class="active" href="buyer_fbacks.php"> Buyers Feedbacks </a></li>
					<li class="nav_li"><a href="contact.php"> CONTACT US </a></li>
					<li class="nav_li"><a href="about.php"> ABOUT US </a></li>
					<li class="nav_li"><a href="services.php"> SERVICES </a></li>
					<li class="nav_li"><a href="gallery.php?id=100"> GALLERY </a></li>
					<li class="nav_li"><a href="home.php"> HOME </a></li>

				</ul>  

			<div class="middle">


				<img src="images/fback1.jpg" class="fback_img">

				<div class="fback_heading">
					<h1>Buyers Feedbacks</h1>
				</div>	

				<div class="fback_div">

					<table class="fback_table"  border="0" width="100%" cellspacing="25px" cellpadding="0px">


					<?php
						while($row=mysqli_fetch_assoc($result)){
							$item_id=$row['item_code'];

					?>

							<tr>

								<td rowspan="7" width="30%"> <?php    
														$image="SELECT image_name FROM items WHERE item_code=$item_id";
														$image_result=mysqli_query($con,$image);  

														$raw=mysqli_fetch_assoc($image_result);

														echo '<img src=manager/uploads/'.$raw['image_name'].' width=100%>';



								     			 ?>  
								</td>

								<td>
									<?php  

										$item_name="SELECT item_name FROM items WHERE item_code=$item_id";
										$item_name_result=mysqli_query($con,$item_name);

										$raw=mysqli_fetch_assoc($item_name_result);	

										echo '<h3 align=center class=fback_item_name> Item Name : ' .$raw['item_name']. '</h3>';

						         	?>						         	
						         </td>


							</tr>

							<tr>

								<td> 

									<?php  

										$no++;

										$buyer_name="SELECT name FROM buyes_feedbacks WHERE feedback_no=$no";
										$buyer_name_result=mysqli_query($con,$buyer_name);

										$raw=mysqli_fetch_assoc($buyer_name_result);	

										echo '<h3 align=center class=fback_item_name> Buyer Name : ' .$raw['name']. '</h3>';

						         	?>	

								</td>
							
							</tr>

							<tr>

								<td> 

										<?php  

										$fb="SELECT feedback FROM buyes_feedbacks WHERE feedback_no=$no";
										$fb_result=mysqli_query($con,$fb);

										$raw=mysqli_fetch_assoc($fb_result);	

										echo '<p align=center class=fb> Buyer Feedback :  <br><br>' .$raw['feedback']. '</p>';

						         	?>

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






