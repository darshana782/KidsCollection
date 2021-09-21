<?php require_once('connection.php'); ?>


<?php

       	if(isset($_GET['id'])){
       			$sql = "DELETE FROM buyes_feedbacks WHERE feedback_no = ".$_GET['id'];    			       			
       			$result = mysqli_query($con,$sql);
       			
       			if($result){
       				//echo "Sucessfull";
       			}
       			else{

       			}

	header("Location: Mcusfeed.php");

}
?>