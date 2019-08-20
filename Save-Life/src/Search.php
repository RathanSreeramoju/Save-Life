<?php
if (isset($_POST['submit'])) {
	$connection = new mysqli(host:"localhost", username:"root", passwd:"", dbname:"phpSearch");
	$q = $connection->real_escape_string($_POST['q']);
	$column = $connection->real_escape_string($_POST['column']);
	if ($column == ""|| ($column != "firstName" && $column != "lastName"))
	$column = "firstName";

	$sql = $connection->query( query:"SELECT firstName FROM users WHERE $column LIKE '%$q%'");
	if ($sql->num_rows > 0) {
while ($data = $sql->fetch_array())
    echo $data['firstName'] . "<br>";

	} else
	echo "Your search query doesn't match any data!";
	
}
?>
