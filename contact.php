<?php
	$con=mysqli_connect("localhost","root","","kids_collection") or die('connection failed');
?>



<?php




	if(isset($_POST['suB'])){


	$fname=$_POST["fn"];
	$lname=$_POST["ln"];
	$email=$_POST["emailaddr"];
	$fnum=$_POST["fixedtp"];
	$mnum=$_POST["mobiletp"];
	$comment=$_POST["cmnt"];
	$use=$_POST["use"];


		$msg="INSERT INTO contact VALUES('$fname','$lname','$email','$fnum','$mnum','$comment','$use')";

		$res=mysqli_query($con,$msg);

		if($res)
			echo"<script> alert('Your Message has been send.. <br>  Thank You...!) </script>";
		else
			echo"<script> alert('There is an error... please try again') </script>";

	}

?>


<html>

<head>
	<title>login</title>
	
	<link rel="stylesheet" href="contact_css.css" type="text/css">
</head>

<body bgcolor="#8fc9f2">
	<div class="container">

				<ul class="link_list_for_others" style="z-index: 1">
					
					<li style="float:left" class="nav_li"><a class="active" href="contact.php"> CONTACT US </a></li>
					<li class="nav_li"><a href="about.php"> ABOUT US </a></li>
					<li class="nav_li"><a href="services.php"> SERVICES </a></li>
					<li class="nav_li"><a href="gallery.php?id=100"> GALLERY </a></li>
					<li class="nav_li"><a href="home.php"> HOME </a></li>

				</ul>



			<div class="middle">

			

				<div class="contact_form">

					<img src="images/contact_baby.png" id="contact_image">	
					<div id="back_container"> </div>

					<h1 id="form_heading">Contact Form </h1>

					<p id="form_description">KIDS COLLECTION using this form.. Please check that your Email address is correct.. <br> We'll contact you within 24 Hours via Emial address..</p> <br>


					<table class="contact_table" border=0 cellpadding="15px" cellspacing="2px">


						<form method="POST" action="#" >

							<tr>
								<td> First Name </td>
								<td colspan="2"><input type="text" name="fn" class="text_box" placeholder="Enter your First Name" size="40px"></td>
							</tr>

							<tr>
								<td> Last Name </td>
								<td colspan="2"><input type="text" name="ln" class="text_box" placeholder="Enter your Last Name" size="40px"></td>
							</tr>

							<tr>
								<td> Email </td>
								<td colspan="2"><input type="text" name="emailaddr" class="text_box" placeholder="Enter your Email Address" size="40px" maxlength="50"></td>
							</tr>

							<tr>
								<td> Telephone Number </td>
								<td colspan="2"><input type="text" name="fixedtp" class="text_box" placeholder="Fixed Line" size="40px" maxlength="10"></td>
							</tr>
							
							<tr>	
								<td> </td>
								<td colspan="2"><input type="text" name="mobiletp" class="text_box" placeholder="Mobile Number" size="40px" maxlength="10"></td>
							</tr>

							<tr>
								<td class="com"> Comment </td>
								<td colspan="2"><textarea rows="10" cols="60" name="cmnt" placeholder="Please leave your Message" ></textarea></td>
							</tr>
							
							<tr>	</tr>

							<tr>
								<td>Did our website useful to you?</td>	
								<td align="right"><input style="cursor: pointer" type="radio" name="use" value="yes" required> YES </td>
								<td><input style="cursor: pointer" type="radio" name="use" value="no" required> NO </td>
							</tr>

							<tr>
								<td colspan="2" align="right"> <input type="submit" id="btn" name="suB" value="SEND" > </td>
								<td> <input type="submit" name="cancelB" id="btn" value="CANCEL"> </td>
							</tr>
								
						</form>
					</table>					

				</div>

				



				<div id="map">

					<h1 style="letter-spacing: 4px "> Find Our Location</h1>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.903086480696!2d79.8589499147431!3d6.902192395012684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25963120b1509%3A0x2db2c18a68712863!2sUniversity%20of%20Colombo%20School%20of%20Computing!5e0!3m2!1sen!2slk!4v1578142118584!5m2!1sen!2slk" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				</div>


				<div class="address">
					<h2><center> Our Address </center></h2>

					<hr color=aqua>  <br>

						<h4>Head Office :</h4>

							7/1A,<br>
							Dutugemunu Mawatha,<br>
							Werahera,<br>
							Boralesgamuwa.<br><br>

						<h4>Email Address :</h4>	

							<p>kidscollection209@gmial.com</p> <br>

						<h4>Contact Number :</h4>	

							<p><b>Manager : +94 75 826 3247  </b><br>
								(Kapila Karunathilake)</p>

							<p><b>Call Center : +94 11 265 8697  </b><br>
								</p>	



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



