<?php
	include 'connect.php';
	$result = $conn->query("select * from info ");
	$i  = 1;
	$count = $result->num_rows;
	$output["count"]=$count;
	while($obj = $result->fetch_object()){
			$output[]=$obj;
	}
	echo json_encode($output);
?>