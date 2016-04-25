<!DOCTYPE html>
<html>
	<head>
		<?php

		$image = intval($_GET['image']);
		$titles = file('titles.txt');
		$title = $titles[$image - 1];

		echo "<title>$title</title>";

		?>
	</head>
	<body>
		<?php

		$file = "img/$image.jpg";
		if (file_exists($file)) {
			$src = "/rewritey/$file";
			echo "<img src=\"$src\">";
		}

		?>
	</body>
</html>
