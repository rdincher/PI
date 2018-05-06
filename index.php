<! DOCTYPE html>
<html>
  <head>
    <title>Pi</title>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
  	<script>
	function threeDay() {
   		$.ajax({
      		url:'lights.php',
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
  <style>
  		table {
    		border-spacing: 15px;
			}
 	 </style>
  </head>
  <body>
  	<h3> Pi Page</h3>
  	<input type="button" id="btnWeather" value="Weather" onCLick="window.location.href = '/weather.php'"/>
	<input type="button" id="btnPacking" value="Packing List" onCLick="window.location.href = '/packing.php'"/>
	<button type="button" id="btnTest" onClick=threeDay()>Light Test</button>
	<input type="button" id="btnLights" value="Lights" onCLick="window.location.href = '/lights.php'"/>
	<div id="output">Test Div</div>
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