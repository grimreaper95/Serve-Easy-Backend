<?php
	include 'se_connect.php';
			
	$providerID = $_POST['providerID'];	
	$serviceName = $_POST['serviceName'];
	$noofcatetgories = $_POST['noOfCategories'];		
	$categories = array();
	for( $i = 0 ; $i < $noofcatetgories ; $i++){
		array_push($categories,$_POST['category'.$i]);
	}
	
	$q1 = "select service_id from service where provider_id = ".$providerID;	
	$res1 = $handle->query($q1);
		
	$flag = false;
	if($res1){
		while($row = $res->fetch_assoc()){				
			$service_id = $row['service_id'];
		}
		$q2 = "delete from category where service_id = ".$service_id;
		$res2 = $handle->query($q2);
		if($res2){
			$q3 = "Insert into SERVICE VALUES (NULL,'".$serviceName."','".$providerID."')";
			$res3 = $handle->query($q3);
			if($res3){
				$q4 = "Select service_id from SERVICE where service_name = '".$serviceName."';";	          	
				$res4 = $handle->query($q4);	
				for( $i = 0 ; $i < $noofcatetgories ; $i++){
					$q5 = "Insert into CATEGORY VALUES (NULL,'".$categories[$i]."','".$serviceID."')";
					$res5 = $handle->query($q);
					if($res5){
						$flag = true;
						echo 'success';
					}
				}		
			}
		}
	}
	if($flag == false)
		echo 'error';
	
?>