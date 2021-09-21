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

<?php
	if(isset($_GET['submitB'])){

		$start=strval($_GET['date_form']);
		$end=strval($_GET['date_to']);

	}
?>	



<html>

<head>
	<title>Manager(available stock)</title>
	<link rel="stylesheet" href="inbox_css.css" type="text/css">
	<link rel="stylesheet" href="avail_css.css" type="text/css">


</head>

<body bgcolor="#dcf3fa">
	<div class="container">


		<h1 align="center" class="topic"> Sold Item List </h1>

		<?php
			echo " <h3 align=center> List of sold item between "  .$start.  "  and  "  .$end.  "</h3> ";
		?>



		<div class="report1">

			<table border="0" width="50%" align="center" class="report_table">

				<tr>
					<td></td>
					<td align="center">Sold Qty</td>
					<td align="center">DATE</td>
				</tr>

				<tr>
					<td></td>
					<td colspan="2"><hr color="black"></td>
				</tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>


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




					  	$list="SELECT * FROM daily_update WHERE sold_date BETWEEN '$start' AND '$end'";
						$result2=mysqli_query($con,$list);

						
					  			while ($raw=mysqli_fetch_assoc($result2)) {
									$cata_name=$raw['category'];
									$date=$raw['sold_date'];
	  			
									if($cata==$cata_name){
										$iname=$raw['item_name'];
										$sold_qty=$raw['qty'];

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
												</td>';

										echo '	<td>
													<p class=item_qty>'
														.$date.
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
	