<?php require_once('connection.php'); ?>


<?php

       	if(isset($_GET['id'])){
       			$sql = "SELECT * FROM new_suppliers WHERE id = ".$_GET['id'];    			       			
       			$result = mysqli_query($con,$sql);


                            $row=mysqli_fetch_assoc($result);
                            

                            $output="SELECT * FROM users";
                            $res=mysqli_query($con,$output);

                            $row_num=mysqli_num_rows($res);
                            $row_num++;

                            $uname=$row['username'];
                            $pass=$row['password'];

                            echo $row_num;       

                            $add="INSERT INTO users VALUES('$row_num','$uname','$pass')";
                            $out=mysqli_query($con,$add);

                            $add1="INSERT INTO user_duplicate VALUES('$row_num','$uname','$pass')";
                            $out1=mysqli_query($con,$add1);
       			
       			if($out){
       				echo "<script> alert(' Request Accepted ') </script>";
       			}
       			else{
                                   echo "<script> alert(' Error ') </script>";
       			}


                            if($out1){
                                   echo "<script> alert(' Request Accepted ') </script>";
                            }
                            else{
                                   echo "<script> alert(' Error ') </script>";
                            }


	header("Location: Mnew_supplier_rqst.php");

}
?>