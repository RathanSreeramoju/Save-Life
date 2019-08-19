<!DOCTYPE html>

<html>
    <head>
        <?php
            extract($_POST);
            $conn = mysqli_connect("localhost", "root", "", "save_life");
            $insert = "INSERT INTO donor_registration (name, blood, phone, email, age, address, password) VALUES ('".$name."','".$blood."','".$phone."','".$email."','".$age."','".$address."','".$password."')";
            mysqli_query($conn, $insert);
            header("location:Registration_Successful.html");
        ?>
    </head>
    
</html>