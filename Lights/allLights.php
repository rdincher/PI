<?php
  $json_string = file_get_contents("http://*bridge*/api/*user Num*");
  $parsed_json = json_decode($json_string);
  ?>
  <table border-spacing: 5px;>
  	<tr>
  		<th> Light  </th>
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