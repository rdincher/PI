<! DOCTYPE html>
<html>
  <head>
    <title>Pi</title>
  	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
  	<script>
	function weather() {
   		$.ajax({
      		url:'weather.php',
      		complete: function (response) {
          		$('#output').html(response.responseText);
      		},
      		error: function () {
         		$('#output').html('Bummer: there was an error!');
     		}
  		});
  		return false;
	}
	function packing() {
   		$.ajax({
      		url:'packing.php',
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
  	<h4> Pi Page</h4>
  	<button type="button" id="btnWeather" onClick=weather()>Weather</button>
	<button type="button" id="btnThree" onClick=packing()>Packing List</button>
  	<div id="output">waiting for action</div>
 	<br><br><br>
 	<?php 
 		echo "Web server not yet configured<br>"; 
 		echo date('Y-m-d H:i:s');
 		echo "<br>";
 		$name = "";
 	?>
 	<!--<?php echo date('Y-m-d H:i:s');?>-->
  </body>
</html>