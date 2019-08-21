<?php
$name = $_REQUEST['name'];
$Comment = $_REQUEST['Comment'];







$con = mysqli_connect("localhost","root","","save_life");
// Check connection
 $query = "INSERT into `feeback` (name, Comment)
VALUES ('$name', '$Comment')";

$result = mysqli_query($con,$query);
 
        if($result)
        {
     
          echo "submitted";
          header("location:Feedback_submitted.html");


         }
         else 
         {
            echo "failed";
          
         }
         




?>