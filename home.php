<?php require_once('connection.php'); ?>




<html>

<head>
	<title>login</title>
	<link rel="stylesheet" href="home_css.css" type="text/css">
</head>

<body bgcolor="#e6ffff">
	<div class="container">

			<!-- <div class="header">
				<h1>WELCOME TO KIDS COLLECTION</h1>
				<p>kids collection</p>
			</div> -->

			

				<ul class="link_list" style="z-index: 1">
					
					<li class="nav_li"><a href="contact.php"> CONTACT US </a></li>
					<li class="nav_li"><a href="about.php"> ABOUT US </a></li>
					<li class="nav_li"><a href="services.php"> SERVICES </a></li>
					<li class="nav_li"><a href="gallery.php?id=100"> GALLERY </a></li>
					<li style="float:left" class="nav_li"><a class="active" href="home.php"> HOME </a></li>

				</ul>



			<div class="middle">
				<img class="home_image" src="images/image.jpg">

				<div>

						<div class="back"> </div>

						<img src="images/login_image_2.png" class="login_image">

						<div class="log">
					
							<h2 class="login">LOG IN</h2>
						

							<table align="center" cellpadding="20px" cellspacing="5px" width="500px" >


								<form method="POST">
									<tr>
										<td align="right"><b><font color="white"> Username </font></b></td>
										<td align="center"><input type="text" id="username" name="username" size="40px" placeholder="Username" required></td>
									</tr>

									<tr>
										<td align="right"><b><font color="white"> Password </font></b></td>
										<td colspan="2" align="center"><input type="password" id="password" name="password" size="40px" placeholder="Password" required></td>
									</tr>

									<tr>
										<td colspan="2" align="center">
											<input type="submit" name="submitB" value="LOG IN" class="loginB" style="cursor: pointer">
								<!-- 			<button type="button"  onclick="login()" name="loginB" class="loginB" >LOG IN</button>		******for JS******     -->
										</td>
									</tr>
								</form>
							</table>


							<table align="center" cellpadding="5px" cellspacing="5px" width="500px" >
								<form>
									<tr>
										<td colspan="2" align="center"><font color="white"> or </font></td>
									</tr>	
									
									<tr>
										<td align="right"><b><font color="white"> Create an account </font></b></td>
										<td align="left">

												<button name="sign" class="signB"> 
													<a href="sign.php">
														SIGN IN 
													</a>	
												</button>
											
										</td>
									</tr>
					
								</form>
							</table> 

						</div>

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



 
<!--	************using PHP (login)***********    -->


	<?php

if(isset($_POST['submitB'])){

	$pswrd=$_POST['password'];
	$usrnm=$_POST['username'];


if($usrnm!=''){	


	//checking logger is admin or not

			$data="SELECT * FROM admin WHERE username='$usrnm'";
			$result=mysqli_query($con,$data);

			$row=mysqli_fetch_assoc($result);

	if($usrnm==$row['username']){
		if($pswrd==$row['password']){

			session_start();
					$_SESSION["name"]="yes";
					
					header("location:manager/Mone_by_one_stock.php?id=100");

		}else{
			echo "<script> alert('Incorrect Password') </script>";
		}
	}

	
	
	//checking logger is supplier or not

			$data="SELECT * FROM user_duplicate WHERE username='$usrnm'";
			$result=mysqli_query($con,$data);

			$row=mysqli_fetch_assoc($result);	

		if($usrnm==$row['username']){

			if($pswrd==$row['password']){

				session_start();
				$_SESSION["name"]="yes";

				$_SESSION["user_id"]=$row['user_id'];
					
				header("location:suppliers/Scontact_admin.php");
			}else{
					echo "<script> alert('Incorrect Password') </script>";	
			}
		}




	
		//checking logger is stock keeper or not

			$data="SELECT * FROM sk WHERE username='$usrnm'";
			$result=mysqli_query($con,$data);

			$row=mysqli_fetch_assoc($result);		

		if($usrnm==$row['username']){

			if($pswrd==$row['password']){

				session_start();
				$_SESSION["name"]="yes";
					
				header("location:stock keeper/Scontact_admin.php");
			}else{
				echo "<script> alert('Incorrect Password') </script>";
			}	
		}else{
		echo "<script> alert('Incorrect Username or Password') </script>";
		}

	}
}
			

?>






<!--	************using java script***********
		
		

	<script language="javascript">
		
		function login(){

			var uname=document.getElementById("username").value;
			var pass=document.getElementById("password").value;



			if(uname=="DARSHANA28"){
				if(pass=="123456"){
					location.assign("manager/Mhome.php");
				}else{
					alert("***Incorrect Password***");
				}
			}else{
				alert("***Incorrect Username***");

			}

		}


	</script> -->



</body>
</html>