<?php
	require './dbConnect.php';
	
	$query = "SELECT * FROM products ORDER BY Id;";
	$result = pg_query($dbServer, $query);
	$stocks = pg_fetch_all($result, PGSQL_ASSOC);
	
	pg_close($dbServer);

	echo json_encode($stocks);
?>