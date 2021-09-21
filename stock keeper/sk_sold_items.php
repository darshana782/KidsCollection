<?php require_once('connection.php'); ?>


<?php
	session_start();
	if($_SESSION["name"]!="yes"){
		header("location:../home.php");
	}
?>


<?php

	$items="SELECT * FROM category";
	$result=mysqli_query($con,$items);

?>



<html>

<head>
	<title>Manager(available stock)</title>
	<link rel="stylesheet" href="sold_item_css/inbox_css.css" type="text/css">
	<link rel="stylesheet" href="sold_item_css/avail_css.css" type="text/css">


</head>

<body bgcolor="#b7b9bd">
	<div class="container">


		<h1 align="center" class="topic"> Sold Item List </h1>

		<table align="center" border="0">
			<form method="GET" action="SK_sold_result.php">
				<tr>
					<td>Select Date Range</td>
					<td><input type="date" name="date_form" required></td>
					<td><input type="date" name="date_to" required></td>
					<td><input type="submit" name="submitB" value="GO"></td>
				</tr>
			</form>
		</table>


		<div class="report">

			<table border="0" width="50%" align="center" class="report_table">

				<tr>
					<td></td>
					<td align="center">Qty</td>
				</tr>

			<?php
				while($row=mysqli_fetch_assoc($result)){
				$cata=$row['category_name'];
			
				echo '<tr>
						<td>
							<h3>'
								.$cata. 

							'</h3>
						</td>
					  </tr>';


					  	$list_of_items="SELECT * FROM items";
						$result2=mysqli_query($con,$list_of_items);


					  			while ($raw=mysqli_fetch_assoc($result2)) {
									$cata_name=$raw['category'];

					 					  			
									if($cata==$cata_name){
										$iname=$raw['item_name'];

										$qty="SELECT * FROM daily_update WHERE item_name='$iname'";
										$result3=mysqli_query($con,$qty);

										$line=mysqli_fetch_assoc($result3);
										$sold_qty=$line['qty'];

										echo '<tr>
												<td>
													<p class=items>'
														.$iname.
													'</p>
												</td> ';

										echo '	<td>
													<p class=item_qty>'
														.$sold_qty.
													'</p>
												</td>	
											  </tr>';	  

									}
								}

								echo "<tr></tr>";
								echo "<tr></tr>";
								echo "<tr></tr>";
								echo "<tr></tr>";
								echo "<tr></tr>";
								echo "<tr></tr>";
								echo "<tr></tr>";
								echo "<tr></tr>";
								unset($result2);

			}

			?>

		</table>
			
		</div>




		
		
	</div>
</body>
</html>


	