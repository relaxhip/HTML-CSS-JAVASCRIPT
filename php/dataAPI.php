<?php
	$url = "http://data.ntpc.gov.tw/api/v1/rest/datastore/382000000A-000195-002";
	$c = curl_init($url);
	curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
	$result = curl_exec($c);
	echo $result;
?>