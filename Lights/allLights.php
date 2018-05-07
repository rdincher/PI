<?php
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, "http://192.168.2.5/api/NNNcEcM5gL2AN7EnHzXbyLQkSzg6kwAF0y83DGip");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  #$json_string = file_get_contents("http://192.168.2.5/api/NNNcEcM5gL2AN7EnHzXbyLQkSzg6kwAF0y83DGip");
  $parsed_json = json_decode($result);
  ?>
  <table border-spacing: 5px;>
  	<tr>
  		<th> Light ID  </th>
  		<th> Name </th>
  	</tr>
  <?php
  for ($x = 1; $x <= 4; $x++)
  {
  	$lightID = $x;
  	$high = $parsed_json->{'lights'}->{$x}->{'name'};
  	?>
  	<tr>
  		<td><?php echo $lightID; ?></td>
  		<td><?php echo $high; ?></td>
  	</tr>
  	<?php
  }
?>
	</table>