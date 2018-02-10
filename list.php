<?php
	$tests = array_slice(scandir('uploads/'), 2);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Доступные тесты</title>
</head>
<body>
	<h1>Доступные тесты</h1>
	<?php 
		foreach ($tests as $filename) {
			echo "<p>$filename</p>";	
		}
	?>
</body>
</html>