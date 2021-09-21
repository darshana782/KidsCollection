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
	<link rel="stylesheet" href="inbox_css.css" type="text/css">
	<link rel="stylesheet" href="avail_css.css" type="text/css">


</head>

<body bgcolor="#b7b9bd">
	<div class="container">


		<h1 align="center" class="topic"> Available Stock in Report View </h1>


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

										$qty="SELECT * FROM stock WHERE item_name='$iname'";
										$result3=mysqli_query($con,$qty);

										$line=mysqli_fetch_assoc($result3);
										$avail_qty=$line['qty'];

										echo '<tr>
												<td>
													<p class=items>'
														.$iname.
													'</p>
												</td> ';

										echo '	<td>
													<p class=item_qty>'
														.$avail_qty.
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


