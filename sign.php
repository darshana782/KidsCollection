<?php
	$con=mysqli_connect("localhost","root","","kids_collection") or die('connection failed');
?>



<html>

<head>
	<title>User SignIn</title>

	<link rel="stylesheet" href="sign_css.css" type="text/css">

</head>

<body bgcolor="#e6ffff">
	<div class="container">

				<ul class="link_list_for_others">
					
					<li style="float:left" class="nav_li"><a class="active" href="sign.php"> SIGN IN </a></li>
					<li class="nav_li"><a href="contact.php"> CONTACT US </a></li>
					<li class="nav_li"><a href="about.php"> ABOUT US </a></li>
					<li class="nav_li"><a href="services.php"> SERVICES </a></li>
					<li class="nav_li"><a href="gallery.php?id=100"> GALLERY </a></li>
					<li class="nav_li"><a href="home.php"> HOME </a></li>

				</ul>

			<div class="middle">


				<img src="images/signin_back_image.jpg" class="sign_back_image">

					<div class="form_topic">
					
							<h1 align="center">Please Fill this Form...</h1>

							<p>We'll send you an conformation email within 24 hours.Thank you for try to be a part of our bussiess...</p>

					</div>


				<div class="sup_details_form">

					<table align="center" class="contact_table" border=0 cellpadding="10px" cellspacing="5px">


						<form method="POST" action="" >

							<tr>
								<td> First Name </td>
								<td colspan="2"><input type="text" name='fn' class="text_box" placeholder="Enter your First Name" size="50px"></td>
							</tr>

							<tr>
								<td> Last Name </td>
								<td colspan="2"><input type="text" name="ln" class="text_box" placeholder="Enter your Last Name" size="50px"></td>
							</tr>

							<tr>
								<td> NIC </td>
								<td colspan="2"><input type="text" name="id" class="text_box" placeholder="Enter ID No " size="50px"></td>
							</tr>

							<tr>
								<td> Age </td>
								<td colspan="2"><input type="text" name="old" class="text_box" placeholder="Enter Your Age " size="50px"></td>
							</tr>

							<tr>
								<td> Email </td>
								<td colspan="2"><input type="text" name="emailaddr" class="text_box" placeholder="Enter your Email Address" size="50px"></td>
							</tr>

							<tr>
								<td> Telephone Number </td>
								<td colspan="2"><input type="text" name="ftp" class="text_box" placeholder="Fixed Line (Ex: 0112******)" size="50px" maxlength="10"></td>
							</tr>
						
							<tr>
								<td> </td>	
								<td colspan="2"><input type="text" name="mtp" class="text_box" placeholder="Mobile Number (Ex: 077*******)" size="50px" maxlength="10"></td>
							</tr>	


							<tr>
								<td> Gender </td>	
								<td align="left">
									<input style="cursor: pointer;" type="radio" name="gender" value="male" required> MALE 								
									<input style="cursor: pointer;" type="radio" name="gender" value="female" required> FEMALE 
								</td>
							</tr>

							<tr>
								<td> Years of Experience</td>
								<td colspan="2"><input type="text" name="yoe" class="text_box" placeholder=" Ex: About 3 year " size="50px"></td>
							</tr>


							<tr>
								<td> Select item you wish to supply </td>													
							

							
								
								<td>
										<input type="radio" name="good" value="Baby Milk Bottle" required>Baby Milk Bottle<br>
										<input type="radio" name="good" value="Baby Shoes" required>Baby Shoes<br>
										<input type="radio" name="good" value="Electric Cars" required>Electric Cars<br>
										<input type="radio" name="good" value="Electric Bikes" required>Electric Bikes<br>
										<input type="radio" name="good" value="Desk & Chair" required>Desk & Chair<br>
										<input type="radio" name="good" value="Diapers" required>Diapers<br>
										<input type="radio" name="good" value="Playmats & Playpens" required>Playmats & Playpens<br>
								</td>


								<td>
										<input type="radio" name="good" value="Baby bath" required>Baby bath<br>
										<input type="radio" name="good" value="Baby Carrier" required>Baby Carrier<br>
										<input type="radio" name="good" value="Baby Cupboards" required>Baby Cupboards<br>
										<input type="radio" name="good" value="Baby Swings" required>Baby Swings<br>
										<input type="radio" name="good" value="Baby Commode seat" required>Baby Commode seat<br>
										<input type="radio" name="good" value="Baby Stroller" required>Baby Stroller<br>
										<input type="radio" name="good" value="Baby Mosquito Net" required>Baby Mosquito Net<br>
								</td>


							</tr>


							<tr>
								<td> Goods Import From </td>
								<td colspan="2">
									<select name="Import">
										<option>Japan</option>
										<option>China</option>
										<option>USA</option>
										<option>UK</option>
										<option>Thailand</option>
										<option>Singapoor</option>
										<option>German</option>
										<option>France</option>
										<option>Korea</option>
									</select>
								</td>
							</tr>


							<tr>
								<td colspan="3" align="center"><p style="font-size: 30px"> Enter New User Name and Password </p></td>
							</tr>


					    	<tr>
					    		<td align="center" colspan="3" >
					    			<input type="text" name="uname" placeholder="Enter UserName.." size="50px">
					    		</td>
					    	</tr>
    
    					    <tr>
    					    	<td align="center" colspan="3" >
    					    		<input type="password" name="pass" placeholder="Enter Password.." size="50px">
    					    	</td>
    					    </tr>
    
    					    <tr>
    					    	<td align="center" colspan="3" >
    					    		<input type="password" name="password1" placeholder="Enter Password again.." size="50px">
    					    	</td>
					    	</tr>


					    	<tr>
					    		<td colspan="3" align="center">
					    			<input type="submit" name="submitB" value="SEND" id="btn">
					    			<input type="reset" name="cancelB" value="CANCEL" id="btn">
					    		</td>
							</tr>

								
						</form>


					</table>
				</div>	


					<br><br>

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



<?php


		if(isset($_POST["submitB"])) {


			$pass1=$_POST["pass"];
			$pass2=$_POST["password1"];
			$uname=$_POST["uname"];
			$nic=$_POST["id"];

			if($pass1!=$pass2){

					echo"<script> alert('Password is not matching') </script>";
					
			}else{

				$data="SELECT * FROM users WHERE username ='$uname'";
				$res=mysqli_query($con,$data);

				$ROW=mysqli_fetch_assoc($res);


					if($uname==$ROW['username']){

							echo"<script> alert('Username already exists') </script>";

					}else{

							$data="SELECT * FROM new_suppliers WHERE id ='$nic'";
							$res=mysqli_query($con,$data);

							$ROW=mysqli_fetch_assoc($res);


							if($nic==$ROW['id']){

								echo"<script> alert('There is a supplier with this NIC') </script>";


							}else{


									$add="INSERT INTO new_suppliers(fname,lname,id,age,email,fixed_tp,mobile_tp,sex,ex_year,goods,import_from,username,password) VALUES('".$_POST['fn']."','".$_POST['ln']."','".$_POST['id']."','".$_POST['old']."','".$_POST['emailaddr']."','".$_POST['ftp']."','".$_POST['mtp']."','".$_POST['gender']."','".$_POST['yoe']."','".$_POST['good']."','".$_POST['Import']."','".$_POST['uname']."','".$_POST['pass']."')";

									$result=mysqli_query($con,$add);

										if($result)
												echo"<script> alert('Your Details has been saved successfully.. We'll contact within 24 Hours... <br>  Thank You...!) </script>";
										else
												echo"<script> alert('There is an error with your Sign in') </script>";

							}
					
					}
					
			}		

		
		}


	

?>