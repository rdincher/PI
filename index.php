<! DOCTYPE html>
<html>
  <head>
    <title>Pi</title>
  </head>
  <body>
  	<h3> Pi Page</h3>
  	<input type="button" id="btnWeather" value="Weather" onCLick="window.location.href = '/weather.php'"/>
	<input type="button" id="btnPacking" value="Packing List" onCLick="window.location.href = '/packing.php'"/>
	<input type="button" id="btnLights" value="Lights" onCLick="window.location.href = '/lights.php'"/>
 	<br><br>
 	<?php 
 		echo "Web server partially configured<br>"; 
 		echo date('Y-m-d H:i:s');
 		echo "<br>";
 		$name = "";
 	?>
 	<!--<?php echo date('Y-m-d H:i:s');?>-->
  </body>
</html>