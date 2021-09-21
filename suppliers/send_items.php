<?php require_once('connection.php'); ?>


<?php
	session_start();
	if($_SESSION["name"]!="yes"){
		header("location:../home.php");
	}
?>

<?php
	$x=$_SESSION["user_id"];
	// echo $x;

	$tot=0;

	$sql="SELECT * FROM items WHERE supplier_id=$x";
	$res=mysqli_query($con,$sql);

?>


<?php

	if(isset($_GET['id'])){
		
		$x="SELECT * FROM items WHERE item_code=".$_GET['id'];
		$y=mysqli_query($con,$x);

		// if($y){
		// 	echo"succcc";
		// }else{
		// 	echo "fail";
		// }
	}

?>


<html>

<head>
	<title>Suppplier-Admin (contact)</title>
	<link rel="stylesheet" href="inbox_css.css" type="text/css">
	<link rel="stylesheet" href="M_sk_contact_css.css" type="text/css">
	<link rel="stylesheet" href="sup_home_css.css" type="text/css">



</head>

<body bgcolor="#3d3d3d">
	<div class="container">

		<div class="nav">

				<ul class="link_list_for_others" style="z-index: 1">			 				 	
				 	
				 	<li class="nav_li" style="float: right">
				 		<a href="logout_session.php"> 
				 			<img class="logoutB" src="../images/logout.png">
				 		</a>
				 	</li>
			 	
				 	<li class="nav_li"><a href="#"> INBOX </a></li>
				 	<li class="nav_li"><a href="Scontact_admin.php"> CONTACT ADMIN </a></li>		
				 	<li class="nav_li"><a class="active" href="supplier_home.php"> HOME </a></li>	

				</ul>
		</div>

			<div class="middle">

				<div class="send_item_table_content">

					<h1 align="center" style="color:navy">Send More Items</h1>

					<table class="send_item_table" border=0 align="center">
						<form method="POST">

							<?php
								while($row=mysqli_fetch_assoc($y)){	

									$id=$row['item_code'];
									$iname=$row['item_name'];

									echo "<tr>
											<td> Item name : "
												.$row['item_name'].
											"</td>
										  </tr>";

									echo "<tr>
											<td> Item code : "
												.$row['item_code'].
											"</td>
										  </tr>";
										  
									echo "<tr>
											<td>
												<input type=text name=qty placeholder='             how many items would you send?' required>	
											</td>
										  </tr>";

									echo "<tr>
											<td align=center>
												<input type=submit name=subB id=btn value=Send New Stock>
											</td>
										  </tr>";	  	  	  
								}
							?>
							
						</form>

					</table>					
				</div>
				
			</div>
		
	</div>

</body>
</html>


<?php
	
	if(isset($_POST['subB'])){

		$qty=$_POST['qty'];

		$sql="INSERT INTO new_inventory VALUES ('$iname','$id','$qty')" ;
		$result3=mysqli_query($con,$sql);

		if($result3){
			echo "<script> alert('success') </script>";

			header("location:supplier_home.php");
		}else{
			echo "<script> alert('failed') </script>";			
		}


	}

?>
