<?php
$name = $_REQUEST['name'];
$blood_group = $_REQUEST['blood_group'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$age = $_REQUEST['age'];
$password = $_REQUEST['password'];
$location = $_REQUEST['location'];






$con = mysqli_connect("localhost","root","","save_life");
// Check connection
 $query = "INSERT into `donor_registration` (name, blood_group, phone, email, age, password, location)
VALUES ('$name', '$blood_group', '$phone', '$email', '$age', '$password', '$location')";

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