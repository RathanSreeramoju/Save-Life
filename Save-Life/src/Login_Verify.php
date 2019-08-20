<?php

$name = $_POST['name'];
$password = $_POST['password'];





$con = mysqli_connect("localhost","root","","save_life");
// Check connection

 $query = "select * from donor_registration where name='$name' and password= '$password'";

$result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     
           echo "success";
           header("Location: Home.html");
    
         }

else{
    echo "Failed";
    header("Location: Login_Unsuccessful.html");
}
?>