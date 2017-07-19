<! DOCTYPE html>
<html>
  <head>
  	<title>Weather</title>
  </head>
  <style>
  table {
    border-spacing: 15px;
	}
  </style>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js">>
	var function tenDay() {
   		$.ajax({
      		url:'weatherTenDay.php',
      		complete: function (response) {
          		$('#output').html(response.responseText);
      		},
      		error: function () {
          		$('#output').html('Bummer: there was an error!');
      		}
  		});
  		return false;
	}
  </script>
  <body>
  	<h4> Weather</h4>
  	<button type="button" onClick="tenDay()">10 Day Forecast</button>
  	<div id="output">waiting for action</div>
 	<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/ff5a2e643163fc5e/forecast10day/q/IA/Cedar_Rapids.json");
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
  for ($x = 1; $x <= 10; $x++)
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
  		<td><img src=<?php echo $icon; ?> alt="Weather"></td>
  	</tr>
  	<?php
  }
?>
	</table>
  </body>
</html>