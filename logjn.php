<?php
	include 'se_connect.php';
	$user_type = $_POST['user_type'];
	$mobile_no = $_POST['mobile_no'];
	$password  = $_POST['password'];	
	$q = "select * from ".$user_type." where ".$user_type."_phno = ".$mobile_no." and ".$user_type."_pw = '".$password;
	$res = $handle->query($q);
	$cnt = 0 ;
	while($row = $res->fetch_assoc()){
		$arr = array();
		$arr['user_name'] = $row[$user_type.'_name'];
		$arr['user_id'] = $row[$user_type.'_id'];		
		$arr['row_count'] = $cnt;
		array_push($output,$arr);
		$cnt++;
	}
	echo json_encode($output);
?>