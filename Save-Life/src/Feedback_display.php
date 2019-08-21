
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
            <center><h1>Feedback List</h1></center>
        </div>
        <form class = "form">
         <table border="1";
  				width: 100%;
  			padding: 8px;
  			text-align: left;
  			border-bottom: 1px solid #ddd;>
	<tr>
		<th>Name</th>
		<th>Comment</th>
		
	</tr>


<?php
$Conn=mysqli_connect("localhost","root","","save_life");


	$show="SELECT * from feeback" ;
	$result=mysqli_query($Conn,$show);
	while($rows=mysqli_fetch_assoc($result)){
		echo  "<tr>";
		echo  "<td>";
		echo $rows['Name'];
		echo  "</td>";
		echo  "<td>";
		echo $rows['Comment'];
		echo  "</td>";
		echo  "</tr>";
		echo "<br/>";
	}

?>
</table>
		


        </form>

		</br>
		
	</body>
</html>
            
        



