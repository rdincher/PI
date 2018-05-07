<! DOCTYPE html>
<html>
  <head>
    <title>Light Control Page</title>
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
	function lightOn() {
   		
   		$.ajax({
     		url:'lightsON.php',
     		type: "POST",
     		dataType:'json', // add json datatype to get json
     		data: ({num: 1}),
      		complete: function (response) {
          		$('#search').html(response.responseText);
      		},
      		error: function () {
         		$('#search').html('Bummer: there was an error!');
     		}
  		});
  		return false;
	}
  </script>
  <script language="Javascript">
  	function lightsOn()
  	{
  		var http = new XMLHttpRequest();
    	http.open('PUT', "http://192.168.2.5/api/NNNcEcM5gL2AN7EnHzXbyLQkSzg6kwAF0y83DGip/lights/1/state", true);
    	http.send('{"on":true}');
    }
  </script>
  </head>
  <body>
  	<h3>Light Control</h3>
	<button type="button" id="btnTest" onClick=allLights()>Light List</button>
	<div id="output"></div>
	</br>
	<div id="search">
  		Light ID: <input id="lightNum" type="number" value="" min="1" style="width: 3em"/>
  		<button type="button" id="toggle" onClick="lightsOn()">Turn On Light</button>
	</div>
  </body>
</html>