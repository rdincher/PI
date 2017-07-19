<! DOCTYPE html>
<html>
  <head>
  	<title>Weather</title>
  	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
  	<script>
	function tenDay() {
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
	function threeDay() {
   		$.ajax({
      		url:'weatherThreeDay.php',
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
  	<h4> Weather</h4>
  	<button type="button" id="btnTen" onClick=tenDay()>10 Day Forecast</button>
	<button type="button" id="btnThree" onClick=threeDay()>3 Day Forecast</button>
  	<div id="output">waiting for action</div>

  </body>
</html>