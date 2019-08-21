
<!DOCTYPE html>

<html>
    <head>
        <style>
            .form{
                display: block;
                background-color: #fd5a5a;
                width: 1200px;
                height: 500px;
                margin: 0 auto;
                border-radius: 50px;
                text-align: center;
            }
            
            .input{
                position: relative;
                height: 40px;
                width: 30%;
                border-radius: 10px;
                text-align: center;
                font-size: 20px;
            }
            
            .submit {
                position: relative;
                background-color: white; /* Green */
                border: 2px solid #fd5a5a;
                color: #fd5a5a;
                width: 30%;
                top: 40%;
                padding-top: 1.5%;
                padding-bottom: 1.5%;
                text-align: center;
                text-decoration: none;
                font-size: 30px;
                font-weight: bold;
                border-radius: 10px;
                transition-duration: 1s;
            }
            
            .submit:hover{
                border: 2px solid white;
                background-color: #fd5a5a;
                color: white;
            }
            .button{
    		position:absolute;
    		bottom: 50%;
    		right:20%;
}
            
            a {
                color: #fd5a5a;
            }
            
        </style>
    </head>
    <body>
        <div style = "color: #fd5a5a;">
            <center><h1>Donor's List</h1></center>
        </div>
        <form class = "form"  action = "Login.php">
         <table border="1";
  				width: 100%;
  			padding: 8px;
  			text-align: left;
  			border-bottom: 1px solid #ddd;>
	<tr>
		<th>name</th>
		<th>blood_group</th>
		<th>age</th>
		<th>location</th>
		<th>phone</th>
	</tr>


<?php
$Conn=mysqli_connect("localhost","root","","save_life");
$set=$_POST['search'];
if($set) {
	$show="SELECT name, blood_group, age, location, phone from donor_registration where blood_group= '$set'";
	$result=mysqli_query($Conn,$show);
	while($rows=mysqli_fetch_assoc($result)){
		echo  "<tr>";
		echo  "<td>";
		echo $rows['name'];
		echo  "</td>";
		echo  "<td>";
		echo $rows['blood_group'];
		echo  "</td>";
		echo  "<td>";
		echo $rows['age'];
		echo  "</td>";
		echo  "<td>";
		echo $rows['location'];
		echo  "</td>";
		echo  "<td>";
		echo $rows['phone'];
		echo  "</td>";
		echo  "</tr>";
		echo "<br/>";
	}
}
else {
	echo "nothing found";
}
?>
</table>
		 <button onclick="window.location.href = 'Login.php';">Logout</button>
        </form>

		</br>
		
	</body>
</html>
            
        



