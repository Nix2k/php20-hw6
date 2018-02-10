<?php
	if (isset($_POST['upload'])) {
		if (isset($_FILES['test'])) {
			$uploaddir = 'uploads/';
			$uploadfile = $uploaddir . basename($_FILES['test']['name']);
			if (move_uploaded_file($_FILES['test']['tmp_name'], $uploadfile)) {
	    		echo '<b>Файл был успешно загружен.</b>';
	    		exit();
			} else {
	    		echo '<b>Ошибка загрузки!</b>';
			}
		} else {
			echo '<b>Файл не загружен</b>';
		}
	}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Загрузка файла с тестом</title>
</head>
<body>
	<h1>Загрузка файла с тестом</h1>
	<form  enctype="multipart/form-data" method="post" action="admin.php">
		<p>Файл с тестом <input type="file" name="test" accept=".json"></p>
		<input type="submit" name="upload" value="Загрузить">
	</form>
</body>
</html>