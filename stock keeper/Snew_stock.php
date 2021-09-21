<?php require_once('connection.php'); ?>


<?php
	session_start();
	if($_SESSION["name"]!="yes"){
		header("location:../home.php");
	}
?>



<html>

<head>
	<title>SK(new_stock)</title>
	<link rel="stylesheet" href="notification_css.css" type="text/css">


</head>

<body bgcolor="#3d3d3d">
	<div class="container">

		<div class="nav">

				<ul class="link_list_for_others" style="z-index: 1">
					<li class="nav_li"><a class="active"> New Stocks </a></li>
				</ul>
		</div>



			<div class="middle">
				

			</div>
		
	</div>





</body>
</html>


