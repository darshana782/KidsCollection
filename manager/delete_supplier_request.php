<?php require_once('connection.php'); ?>


<?php

       	if(isset($_GET['id'])){
       			$sql = "DELETE FROM new_suppliers WHERE id = ".$_GET['id'];    			       			
       			$result = mysqli_query($con,$sql);
       			
       			if($result){
       				echo "<script> alert(' Request deleted ') </script>";
       			}
       			else{
                                   echo "<script> alert(' Error ') </script>";
       			}

	header("Location: Mnew_supplier_rqst.php");

}
?>