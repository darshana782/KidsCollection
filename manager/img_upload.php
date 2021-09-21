<?php require_once('connection.php'); ?>


<?php
  session_start();
  if($_SESSION["name"]!="yes"){
    header("location:../home.php");
  }
?>


<?php
    require_once('connection.php'); 
?>    



<?php

if(isset($_POST["subB"])) {

        $item_name=$_POST["in"];
        $item_code=$_POST["ic"];
        $item_price=$_POST["price"];
        $supplier_name=$_POST["sn"];
        $supplier_id=$_POST["sid"];
        
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["pic"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $item_description=$_POST["Idescription"];

        $imgname=$_FILES["pic"]["name"];




        //chech if the item code is written before

    $data="SELECT * FROM items WHERE item_code='$item_code'";
  $res=mysqli_query($con,$data);

  $ROW=mysqli_fetch_assoc($res);  


  if($item_code=$ROW['item_code']){
    echo "<script> alert('Please check whether the entered Item Code is correct or not. Item code already exists..') </script>";


    //chech if there is a user with this supplier_id

  }else{

    $x="SELECT * FROM users WHERE user_id='$supplier_id'";
    $result=mysqli_query($con,$x);

    $row=mysqli_fetch_assoc($result);

    if($supplier_id=$row['user_id']){
      

      if($supplier_name==$row['username']){

        // Check if image file is a actual image or fake image

             $Check = getimagesize($_FILES["pic"]["tmp_name"]);

             if($Check !== false) {

                  $uploadOk = 1;

                  // Check if file already exists

                  if (file_exists($target_file)) {
                        echo "<script> alert('Sorry, Image already exists.') </script>";
                        $uploadOk = 0;
                  }else{

                       // Check if $uploadOk is set to 0 by an error

                       if ($uploadOk == 0) {
                             echo "<script> alert('Sorry, your file was not uploaded.') </script>";

                       }else{

                             // if everything is ok, try to upload file

                              if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
                                   
                                    
                                    $con=mysqli_connect("localhost","root","","kids_collection") or die('connection failed');
          

                                    $add="INSERT INTO items (item_name,item_code,item_price,supplier_name,supplier_id,image_name,item_description) VALUES ('".$_POST['in']."','".$_POST['ic']."','".$_POST['price']."','".$_POST['sn']."','".$_POST['sid']."','$imgname','".$_POST['Idescription']."')";

                                    $y=mysqli_query($con,$add);

                                    mysqli_close($con);

                                    
                                       if($y){
                                              echo "<script> alert('Success') </script>";

                                       }else{
                                              echo "<script> alert('Fialed') </script>";
                                         }

                               } else {
                                  echo "<script> alert('Sorry, there was an error uploading your file.') </script>";
                               }
                        }


                   } 



              }else {
                  echo "<script> alert('Sorry, File is not an image') </script>";
                  $uploadOk = 0;
              }
      }else{
        echo "<script> alert('Username incorrect') </script>";
      }


      }else{
        echo "<script> alert('There is no Supplier with you entered Supplier ID') </script>";


      }

    }
  }


?>








<html>

<head>
  <title>Manager(add items)</title>
  <link rel="stylesheet" href="Mall_css.css" type="text/css">
  <link rel="stylesheet" href="M_add_item_css.css" type="text/css">


</head>

<body bgcolor="#3d3d3d">
  <div class="container">

        <img src="../images/inventory1.png" class="inventory_image">


    <div class="nav">

        <ul class="link_list_for_others" style="z-index: 1">
                  
          <li class="nav_li"><a href="Mhome.php"> STOCK </a></li>         
          <li class="nav_li"><a href="Mcusfeed.php"> CUSTOMER FEEDBACKS </a></li>
          <li class="nav_li"><a href="Msuppliers.php"> SUPPLIERS </a></li>
          <li class="nav_li" id="dropdown">
                 <a> REVIEW </a>
                  <div class="content">
                   <a href="#">Available Stock in report view</a>
                       <a href="#">Supplier Details</a>
                   <a href="#">List of all items</a>
                   <a href="#">List of sold items</a>
                   <a href="#">Customers's Search list</a> 
                </div>
          </li>
          
          <li class="nav_li"><a href="M_sk_contact.php"> CONTACT STORE KEEPER </a></li>
          <li class="nav_li"><a class="active" href="add_item.php"> ADD NEW ITEM </a></li>
                    
          
          <li class="nav_li" style="float: right">
            <a href="logout_session.php"> 
              <img class="logoutB" src="../images/logout.png">
            </a>
          </li>

          <li class="nav_li" id="dropdown1" style="float: right">
            <a>
               <img class="notimage" src="../images/noti.png">
            </a>   

                 <div class="noti_content">
                      <a href="Mnew_stocks.php">New Stock</a>
                          <a href="inbox.php">Inbox</a>                    
                  </div>


                  <span id="notifi"> 
                      1 
                  </span> 

          </li>

        </ul>
    </div>



      <div class="middle">

        <div class="item_add">

          <table align="center" class="item_table" border=0 cellpadding="15px" cellspacing="2px">


            <form method="POST" action="" enctype="multipart/form-data">

              <tr>
                <td> Item Name </td>
                <td><input type="text" name='in' class="text_box" placeholder="Enter Item Name" size="50px"></td>
              </tr>

              <tr>
                <td> Item Code </td>
                <td><input type="text" name="ic" class="text_box" placeholder="Enter Item Code" size="50px"></td>
              </tr>

              <tr>
                <td> Price </td>
                <td><input type="text" name="price" class="text_box" placeholder="Enter Item Price" size="50px"></td>
              </tr>

              <tr>
                <td> Supplier Name </td>
                <td><input type="text" name="sn" class="text_box" placeholder="Enter Supplier's Username " size="50px"></td>
              </tr>


              <tr>
                <td> Supplier ID </td>
                <td><input type="text" name="sid" class="text_box" placeholder="Enter Supplier ID " size="50px"></td>
              </tr>


              <tr>
                <td> Item image  </td>
                <td>
                  <input type="file" name="pic">
                </td>
              </tr>

              <tr>
                <td> Item Description </td>
                <td><textarea style="border-radius: 5px; border: 0px" rows="10" cols="70" placeholder="Describe item here..." name="Idescription"></textarea></td>
              </tr>
            
                <tr>
                  <td colspan="2" align="center">
                    <input type="submit" name="subB" value="SEND" id="btn">
                    <input type="reset" name="cancelB" value="CANCEL" id="btn">
                  </td>
              </tr>

                
            </form>


          </table>
        </div>


      </div>
    
  </div>





</body>
</html>


