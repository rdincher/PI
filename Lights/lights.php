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
  </script>
  <script language="Javascript">
  	function lightsOn()
  	{
  		var http = new XMLHttpRequest();
    	http.open('PUT', "http://192.168.2.5/api/NNNcEcM5gL2AN7EnHzXbyLQkSzg6kwAF0y83DGip/lights/"+$('#lightNum').val()+"/state", true);
    	http.send('{"on":true}');
    }
    function lightsOff()
  	{
  		var http = new XMLHttpRequest();
    	http.open('PUT', "http://192.168.2.5/api/NNNcEcM5gL2AN7EnHzXbyLQkSzg6kwAF0y83DGip/lights/"+$('#lightNum').val()+"/state", true);
    	http.send('{"on":false}');
    }
    function disco()
  	{
  		var http = new XMLHttpRequest();
    	http.open('PUT', "http://192.168.2.5/api/NNNcEcM5gL2AN7EnHzXbyLQkSzg6kwAF0y83DGip/groups/0/action", true);
    	http.send('{"effect":"colorloop"}');
    }
    function stopDisco()
  	{
  		var http = new XMLHttpRequest();
    	http.open('PUT', "http://192.168.2.5/api/NNNcEcM5gL2AN7EnHzXbyLQkSzg6kwAF0y83DGip/groups/0/action", true);
    	http.send('{"effect":"none"}');
    }
  </script>
  </head>
  <body>
  	<h3>Light Control</h3>
	<button type="button" id="btnTest" onClick=allLights()>Light List</button>
	<div id="output"></div>
	</br>
	<div id="search">
  		Light ID: <input id="lightNum" type="number" value="" min="1" style="width: 3em"/></br>
  		<button type="button" id="toggle" onClick="lightsOn()">Turn On Light</button>
  		<button type="button" id="toggle" onClick="lightsOff()">Turn Off Light</button></br>
  		<button type="button" id="toggle" onClick="disco()">Disco Lights!</button>
  		<button type="button" id="toggle" onClick="stopDisco()">Stop Disco...</button>
	</div>
  </body>
</html>