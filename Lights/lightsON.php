<?php
    // Method: POST, PUT, GET etc
	// Data: array("param" => "value") ==> index.php?param=value
	$data = False;
	$lightNum = $_POST['num'];
	$url = "http://192.168.2.5/api/NNNcEcM5gL2AN7EnHzXbyLQkSzg6kwAF0y83DGip/lights/"+$lightNum+"/state";
	$data = "{'on':true}";
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_PUT, 1);
	$url = sprintf("%s?%s", $url, http_build_query($data));
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($curl);
	curl_close($curl);
?>
<table border-spacing: 5px;>
  	<tr>
  		<th><?php echo $url; ?> </th>
  		<th> Name </th>
  	</tr>