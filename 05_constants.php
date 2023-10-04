<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
	<?php 
		define("MINSIZE", 50);
		echo MINSIZE;
		echo constant("MINSIZE");
		
		define("ONE", "first thing");
		define("TWO2", "second thing");
		define("THREE_3", "third thing");
		echo "<br>";
		echo ONE;
		
		define("PI", 3.14159);

		$radius = 5;
		$circleArea = PI * ($radius * $radius);
		echo "The area of a circle with radius $radius is: $circleArea";

		define("GREETING", "Hello, World!");
		echo GREETING; // Outputs: Hello, World!

		function displayGreeting() {
			echo GREETING;
		}

		displayGreeting(); 
	?>
</body>
</html>