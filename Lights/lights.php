<! DOCTYPE html>
<html>
  <head>
    <title>Lights</title>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
  	<script>
	function allLights() {
   		$.ajax({
      		url:'allLights.php',
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
	<button type="button" id="btnTest" onClick=allLights()>Light List</button>
	<div id="output"></div>
  </body>
</html>