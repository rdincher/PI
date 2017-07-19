<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/ff5a2e643163fc5e/forecast/q/IA/Cedar_Rapids.json");
  $parsed_json = json_decode($json_string);
  ?>
  <table border-spacing: 5px;>
  	<tr>
  		<th> Day  </th>
  		<th> High </th>
  		<th> Low  </th>
  		<th> Humidity</th>
  		<th> Wind    </th>
  		<th> Conditions </th>
  		<th>            </th>
  	</tr>
  <?php
  for ($x = 0; $x <= 3; $x++)
  {
  	$day = $parsed_json->{'forecast'}->{'simpleforecast'}->{'forecastday'}[$x]->{'date'}->{'weekday_short'};
  	$month = $parsed_json->{'forecast'}->{'simpleforecast'}->{'forecastday'}[$x]->{'date'}->{'month'};
  	$date = $parsed_json->{'forecast'}->{'simpleforecast'}->{'forecastday'}[$x]->{'date'}->{'day'};
  	$high = $parsed_json->{'forecast'}->{'simpleforecast'}->{'forecastday'}[$x]->{'high'}->{'fahrenheit'};
  	$low = $parsed_json->{'forecast'}->{'simpleforecast'}->{'forecastday'}[$x]->{'low'}->{'fahrenheit'};
  	$humid = $parsed_json->{'forecast'}->{'simpleforecast'}->{'forecastday'}[$x]->{'avehumidity'};
  	$wind = $parsed_json->{'forecast'}->{'simpleforecast'}->{'forecastday'}[$x]->{'avewind'}->{'mph'};
  	$windDir = $parsed_json->{'forecast'}->{'simpleforecast'}->{'forecastday'}[$x]->{'avewind'}->{'dir'};
  	$icon = $parsed_json->{'forecast'}->{'simpleforecast'}->{'forecastday'}[$x]->{'icon_url'};
  	$fct = $parsed_json->{'forecast'}->{'simpleforecast'}->{'forecastday'}[$x]->{'conditions'};
  	?>
  	<tr>
  		<td><?php echo $day; ?></br><?php echo $month; ?>/<?php echo $date; ?></td>
  		<td><?php echo $high; ?></td>
  		<td><?php echo $low; ?></td>
  		<td><?php echo $humid; ?></td>
  		<td><?php echo $wind; ?> <?php echo $windDir; ?></td>
  		<td><?php echo $fct; ?></td>
  		<td><img src=<?php echo $icon; ?> alt=""></td>
  	</tr>
  	<?php
  }
?>
	</table>