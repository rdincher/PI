<! DOCTYPE html>
<html>
  <head>
  	<title>Packing List</title>
  </head>
  <body>
  	<h4> Packing List</h4>
  	<p> Heading on a trip? Use This handy form to make a packing list!</p>
  	<form action="packinglist.php" method="post">
  		List Name: <input type="text" name="fname"><br>
  		Number of nights: <input type="text" name="fnights"><br>
  		<em>Select All that apply:</em> <br>
  		<input type="checkbox" name="catagory[]" value="Bike">Bicycle &nbsp<input type="checkbox" name="catagory[]" value="Moto">Motorcycle <br>
  		<input type="checkbox" name="catagory[]" value="Run">Running <input type="checkbox" name="catagory[]" value="Water">Water <br>
  		<input type="checkbox" name="catagory[]" value="Ski">Ski &nbsp &nbsp &nbsp<input type="checkbox" name="catagory[]" value="Over" checked>Overnight<br>
  		<input type="checkbox" name="catagory[]" value="Formal">Involves a Formal Occasion<br>
  		<input type="submit">
  	</form>
 	
 	<!--<?php echo date('Y-m-d H:i:s');?>-->
  </body>
</html>