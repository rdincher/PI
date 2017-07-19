<html>
  <head>
  	<title>Packing List</title>
  </head>
  <body>
  	<h4> Packing List</h4>
 	<?php
 		#set items for each trip type
 		$motoTrip = array("Helmet", "Jacket", "Gloves", "Boots", "Glasses", "Sunglasses");
 		$bikeTrip = array("Bike", "Bike Shoes", "Helmet", "Pump/Tools", "Water Bottles", "Drink Mix", "Garmin", "Jerseys", "Bike Shorts", "Bike Gloves", "Rain Gear", "Sun Glasses");
 		$runTrip = array("Athletic Shirt(s)", "Shorts", "Running Shoes", "Watch");
 		$waterTrip = array("Swimsuit", "Water Shoes", "Towel", "Googles");
 		$overTrip = array("Phone Charger", "Shorts", "Shoes", "Shampoo", "Soap", "Tooth Brush", "Tooth Paste", "Meds", "PJs");
 		$skiTrip = array("Skis", "Boots", "Poles", "Helmet", "Goggles", "Scarf", "Ski Socks", "Base Layer", "Sweat/Fleece pants", "Snow Pants", "Turtleneck", "Sweater", "Vest", "Shell", "Coat", "Gloves", "Hat");
 		$genTrip = array("Pants", "Shirt", "Shoes", "Camera", "Chapstick", "Sun Screen");
 		$miscTrip = array("Camera", "Chapstick", "Sun Screen");
 		$formalTrip = array("Suit", "Dress Shirt", "Tie", "Dress Shoes", "Belt", "Dress Socks", "Undershirt");
 		$perNight = array("pairs of underwear", "pairs of socks", "jeans", "shorts", "T-Shirts");
 		$coldTrip = array("Coat", "Sweatshirts");
 		#Get form Values
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
   			#collect values from form
   			$name = $_REQUEST["fname"];
   			$night = $_REQUEST["fnights"];
   			$moto= 0;
   			$bike = 0;
   			$run = 0;
   			$ski = 0;
   			$formal = 0;
   			$water = 0;
   			$over = 0;
   			$options = $_REQUEST["catagory"];
   			#Process Checkbutton array
   			if(!empty($options))
   			{	
   				for($i = 0; $i < count($options); $i++)
   				{
   					#Go through and populate options
   					switch ($options[$i])
   					{
   						case 'Bike':
   							$bike = 1;
   							break;
   						case 'Moto':
   							$moto = 1;
   							break;
   						case 'Over':
   							$over = 1;
   							break;
   						case 'Water':
   							$water = 1;
   							break;
   						case 'Run':
   							$run = 1;
   							break;
   						case 'Ski':
   							$ski = 1;
   							break;
   						case 'Formal':
   							$formal = 1;
   							break;
   						default:
   							echo $options[$i];
   							echo " Not Listed<br>";
   					}
   				}
   			}
   		}
   		#Print packing list
   		echo "<p style='text-align:center;'>$name
   		<br>----------------------------------------------------------</p>";
		echo '<br>';
		echo '<table>';
		#start first row
		echo '<tr>';
		if($moto == 1)
		{
			echo '<td>';
			echo "Motorcycle<br>--------------";
			echo "<ul>";
			for($i = 0; $i < count($motoTrip); $i++)
			{
				echo "<li>";
				echo $motoTrip[$i];
				echo "</li>";
			}
			echo "</ul>";
			echo '</td>';
		}
		if($run == 1)
		{
			echo '<td>';
			echo "Running<br>--------------";
			echo "<ul>";
			for($i = 0; $i < count($runTrip); $i++)
			{
				echo "<li>";
				echo $runTrip[$i];
				echo "</li>";
			}
			echo "</ul>";
			echo '</td>';
		}
		if($water == 1)
		{
			echo '<td>';
			echo "Water<br>--------------";
			echo "<ul>";
			for($i = 0; $i < count($waterTrip); $i++)
			{
				echo "<li>";
				echo $waterTrip[$i];
				echo "</li>";
			}
			echo "</ul>";
			echo '</td>';
		}
		if($formal == 1)
		{
			echo '<td>';
			echo "Formal<br>--------------";
			echo "<ul>";
			for($i = 0; $i < count($formalTrip); $i++)
			{
				echo "<li>";
				echo $formalTrip[$i];
				echo "</li>";
			}
			echo "</ul>";
			echo '</td>';
		}
		echo '</tr>';
		#start second row
		echo '<tr>';
		if($bike == 1)
		{
			echo '<td>';
			echo "Biking<br>--------------";
			echo "<ul>";
			for($i = 0; $i < count($bikeTrip); $i++)
			{
				echo "<li>";
				echo $bikeTrip[$i];
				echo "</li>";
			}
			echo "</ul>";
			echo '</td>';
		}
		if($ski == 1)
		{
			echo '<td>';
			echo "Skiing<br>--------------";
			echo "<ul>";
			for($i = 0; $i < count($skiTrip); $i++)
			{
				echo "<li>";
				echo $skiTrip[$i];
				echo "</li>";
			}
			echo "</ul>";
			echo '</td>';
		}
		
		if($over == 1)
		{
			echo '<td>';
			echo "Overnight<br>--------------";
			echo "<ul>";
			for($i = 0; $i < count($perNight); $i++)
			{
				echo "<li>";
				echo "$night ";
				echo $perNight[$i];
				echo "</li>";
			}
			
			for($i = 0; $i < count($overTrip); $i++)
			{
				echo "<li>";
				echo $overTrip[$i];
				echo "</li>";
			}
			echo "</ul>";
			echo '</td>';
		}
		else
		{
			echo '<td>';
			echo "General<br>--------------";
			echo "<ul>";
			
			for($i = 0; $i < count($genTrip); $i++)
			{
				echo "<li>";
				echo $genTrip[$i];
				echo "</li>";
			}
			echo "</ul>";
			echo '</td>';
		}
		#pring misc items
		echo '<td>';
		echo "Misc<br>--------------";
		echo "<ul>";
		for($i = 0; $i < count($miscTrip); $i++)
		{
			echo "<li>";
			echo $miscTrip[$i];
			echo "</li>";
		}
		echo "</ul>";
		echo '</td>';
		#end misc items
		echo '</tr>';
		echo '</table>';
	?>
  </body>
</html>
