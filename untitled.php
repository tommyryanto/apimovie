<?php
	$temp=[];
	$search= $_REQUEST['q'];
	$json = json_decode(file_get_contents("http://https://api.themoviedb.org/3/search/movie?api_key=0b63100d8bac24ee86897c70d0618a5c&query=".$search));
	$temp = $json;
	header("Content-type: 	application/json");
	print json_encode($temp);
?>