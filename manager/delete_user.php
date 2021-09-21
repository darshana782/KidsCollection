<?php require_once('connection.php'); ?>


<?php

       	if(isset($_GET['name'])){

                     $name=$_GET['name'];

       			$sql = "DELETE FROM user_duplicate WHERE username = '$name'";    			       			
       			$result = mysqli_query($con,$sql);
       			
       			if($result){
       				echo "<script> alert(' user deleted ') </script>";
       			}
       			else{
                                   echo "<script> alert(' Error ') </script>";
       			}

	//header("Location: Msuppliers.php");

              }
?>