<!DOCTYPE html>

<html>
    <head>
        <?php
            extract($_POST);
            $conn = mysqli_connect("localhost", "root", "", "save_life");
            $res = mysqli_query($conn, "SELECT * FROM donor_registration");
            $flag = 1;
            for ($i = 0; $i < mysqli_num_rows($res); $i++){
                $row = mysqli_fetch_assoc($res);
                if ($row['name'] == $name){
                    $flag = 0;
                    break;
                }
            }
            if ($flag){
                $insert = "INSERT INTO donor_registration (name, blood, phone, email, age, address,password) VALUES ('".$name."','".$blood."','".$phone."','".$email."','".$age."','".$address."','".$Password."')";
                mysqli_query($conn, $insert);
                header("location:Registration_Successful.html");
            }
            else{
                header("location:Registration_Unsuccessful.html");
            }
        ?>
    </head>
    <body>
    
    </body>
</html>