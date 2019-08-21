<<<<<<< HEAD
<?php
if (isset($_POST['submit'])) {
	$connection = new mysqli("localhost", "root","","save_life");
	$q = $connection->real_escape_string($_POST['q']);
	$column = $connection->real_escape_string($_POST['column']);
	if ($column == ""|| ($column != "blood_group" && $column != "location"))
	$column = "blood_group";

	$sql = $connection->query( query:"SELECT blood_group FROM donor_registration WHERE $column LIKE '%$q%'");
	if ($sql->num_rows > 0) {
while ($data = $sql->fetch_array())
    echo $data['blood_group'] . "<br>";

	} else
	echo "Your search doesn't match any data!";
	
}
?>