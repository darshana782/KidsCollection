<?php
	$con=mysqli_connect("localhost","root","","kids_collection") or die('connection failed');
?>


<?php

	if(isset($_POST['subB'])){

		$no="SELECT * FROM buyes_feedbacks";
		$res=mysqli_query($con,$no);

		$num_of_rows=mysqli_num_rows($res);

		$num_of_rows++;


		$sql1="INSERT INTO buyes_feedbacks VALUES ('$num_of_rows','".$_POST['cusname']."','".$_POST['item']."','".$_POST['cndtion']."','".$_POST['fb']."')";

		$result=mysqli_query($con,$sql1);

		if($result)
			echo"<script> alert('Your Feedback has been send.. Thank You...!') </script>";
		else
			echo"<script> alert('There is an error... please try again') </script>";

	}

?>




<html>

<head>
	<title>login</title>

	<link rel="stylesheet" href="leave_feedback_css.css" type="text/css">

</head>

<body bgcolor="#e6ffff" >
	<div class="container">

		<img src="images/feedback_image.png" class="feedback_image">

				<ul class="link_list_for_others">
					
					<li class="nav_li"><a href="contact.php"> CONTACT US </a></li>
					<li style="float:left" class="nav_li"><a class="active" href="leave.php"> Leave Feedback </a></li>
					<li class="nav_li"><a href="about.php"> ABOUT US </a></li>
					<li class="nav_li"><a href="services.php"> SERVICES </a></li>
					<li class="nav_li"><a href="gallery.php?id=100"> GALLERY </a></li>
					<li class="nav_li"><a href="home.php"> HOME </a></li>
				

				</ul>    
				
			<div class="middle">
			
				
				<div class="feedback_content" >
				
						<h1 class="content_heading">Buyer Feedbacks</h1>
						<p class="para"><b>Feedback forms help in improving to understand the opinions of other buyers regarding the item which are bought by them<br> 
						from our company. So it is usefull for other costomers to take a idea about the features,quality and other <br>
						details about our kids products.</b></p>

				</div>
				
			
				<div class="feedback">
				
					<form method="POST" id="fback" action="">
					
						<h2 class="form_topic">Leave Feedback Here</h2>
				
							<label>Name:</label><br>
								<input type="text" name="cusname" class="txt" id="name" placeholder="Enter your Name"><br><br>

							<label>Code of Bought Item:</label><br>
								<input type="text" name="item" class="txt" id="name" placeholder="Enter item code"><br><br>

							<label>Condition:</label><br>
								<select name="cndtion" class="txt" id="con" placeholder="Condition">
											<option>Law</option>
											<option>Medium</option>
											<option>High</option>
								</select><br><br>

							<label>Leave Feedback:</label><br>
									<textarea style="border-radius: 5px; border: 0px" rows="10" cols="70" placeholder="Leave your feedback here" name="fb"></textarea><br><br>

							<center>
								<input type="submit" value="Send" id="btn" name="subB">
								<input type="reset" value="cancel" id="btn"><br>
							</center>	
					</form>
				</div>
			

			</div>	

			
		<div class="bottom_fix">
			<h3>Kids Collection</h3>
			<p>Copyright ©ucsc. All Rights Reserved.</p>
			<img src="images/social_icons.png">		
			<span>
				<h2 style="color: #ffb936">
					Our Mission
				</h2>
					To bring joy, happiness and inspiration to babies and families around the world by providing them <br> 
				  with products and services that embody love.
			</span>				
		</div>
	
		
	</div>



</body>
</html>