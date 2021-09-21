<?php require_once('connection.php'); ?>


<?php

       	if(isset($_GET['id'])){
       			$sql = "DELETE FROM new_inventory WHERE item_code = ".$_GET['id'];    			       			
       			$result = mysqli_query($con,$sql);
       			
       			if($result){
       				//echo "Sucessfull";
       			}
       			else{

       			}

	header("Location: Sinbox.php");

}
?>