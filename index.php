<! DOCTYPE html>
<html>
  <head>  </head>
  <body>
  	<h4> Pi Page</h4>
  	<form method="post" action"<?php echo $_SERVER['PHP_SELF'];?>">
  		Name: <input type="text" name="fname">
  		<input type="submit">
  	</form>
 	<?php
 		
 		if ($_SERVER["REQUEST_METHOD"] == "POST") {
   		 // collect value of input field
   		 $name = $_REQUEST['fname'];
 	
		 $servername = "localhost";
		 $username = "root";
		 #$password = "rasberrypi";
		 $dbname = "website";
		 
		 // Create connection
		 $conn = new mysqli($servername, $username, 'raspberrypi', $dbname);
		 // Check connection
		 if (mysqli_connect_error()) {
    	 	die("Database connection failed: " . mysqli_connect_error());
		 } 
		 echo "<br>Connected<br>";
		 $curDate = date('Y-m-d H:i:s');

		 $loc = $_SERVER['REMOTE_ADDR'];

		 $sql = "INSERT INTO log (name, time, visit) VALUES ('$name', '$curDate', '$loc')";
		 
		 if ($conn->query($sql) === TRUE) {
    	 	#echo "New record created successfully";
		 } else {
    	 	echo "Error: " . $sql . "<br>" . $conn->error;
		 }
		 
		 $conn->close();
		 echo '<br>';
		}
		
		$t = date("H");
 		
 		if ($t < "10") {
 			echo "$name Have a good day!";
 		}
 		else if ($t >= "10" && $t < "20") {
 			echo "$name Good Day!";
 		}
 		else {
 			echo "$name Have a good night!";
 		}
	?>
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
