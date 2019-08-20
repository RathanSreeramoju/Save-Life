<?php
$name = $_REQUEST['name'];
$blood = $_REQUEST['blood'];
$phone = $_REQUEST['phone'];
$age = $_REQUEST['age'];
$address = $_REQUEST['address'];
$password = $_REQUEST['password'];






$con = mysqli_connect("localhost","root","","save_life");
// Check connection
 $query = "INSERT into `donor_registration` (name, blood, phone, age, address, password)
VALUES ('$name', '$blood', '$phone', '$age', '$address', '$password')";

$result = mysqli_query($con,$query);
 
        if($result)
        {
     
          echo "success";
          header("location:Registration_successful.html");


         }
         else 
         {
            echo "failed";
            header("location:Registration_Unsuccessful.html");
         }
         




?>