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

	}



if(isset($_POST['updateB'])){

	$new_arrival=$_POST['qty'];
	$avail=$avail+$new_arrival;

	$sql2 = "UPDATE stock SET qty =$avail WHERE item_code =$iid";
	$result2 = mysqli_query($con,$sql2);

	if($result2){
		header("location:Supdate.php");
	}

}	

?>


<html>

<head>
	<title>SK(update)</title>
	<link rel="stylesheet" href="inbox_css.css" type="text/css">
	<link rel="stylesheet" href="Supdate_css.css" type="text/css">


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

				 	<li class="nav_li" style="float: right">
				 		<a href="frameset_for_inbox&stock.php">
				 			 <img class="notimage" src="../images/noti.png">
				 		</a>
				 				  <span id="notifi"> 
				 		  				1 
						 		  </span> 

				 	</li>

				 	<li class="nav_li" id="dropdown">
  					     <a> REVIEW </a>
				    	    <div class="content">
 						    	 <a href="#">Available Stock in report view</a>
 				     			 <a href="#">List of all items</a>
 				     			 <a href="#">List of sold items</a>
 				   			</div>
				 	</li>
				 	
				 	<li class="nav_li"><a href="Scontact_admin.php"> CONTACT ADMIN </a></li>				 	
				 	<li class="nav_li"><a class="active" href="Supdate.php"> UPDATE STOCK </a></li>	

				</ul>
		</div>


			<div class="middle">

				<img src="../images/update.jpg" class="update_img">    


				<div class="update_div">

						<table class="update_table"  border="0" width="100%" cellspacing="25px" cellpadding="0px">

							<tr>
								<td align="center" class="column_name"><h1> Item Code </h1></td>
								<td align="center" class="column_name"><h1> Item Name </h1></td>
								<td align="center" class="column_name"><h1> Available Stock </h1></td>
								<td align="center" class="column_name"><h1> Update QTY </h1></td>
								<td align="center" class="column_name"><h1> </td>

							</tr>

							<form action='#' method ='POST'>
					
								<tr>
									<?php
										echo "<td><p align=center class=itemname name='id'>" .$row['item_code']. "</p></td>";
										echo '<td><p align=center class=itemname>' .$name. '</p></td>';
										echo '<td><p align=center class=itemname>' .$avail. '</p></td>';
										echo "<td align=center><input type = 'text' name='qty' size=10% required></td>";
									?>
					
								<td align="center" colspan =3><input type='submit' value="UPDATE" name='updateB' id="btn"></td>

								</tr>
		
							</form>
						</table>


				</div>				

			</div>
		
	</div>


</body>
</html>