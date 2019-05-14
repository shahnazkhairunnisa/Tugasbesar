<?php 
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>add new articel</title>
</head>
<body>
	<br><br>
 	<form method="POST" action="actioncreat.php">
 		<input type="hidden" name="waktu">
 		Nama kue	: 
		<input type="text" name="nama" placeholder="Judul">
		<br>
		<br>
		Bahan-bahan	:
		<textarea name="bahan" placeholder="Text Artikel"> </textarea>
		<br><br>
		Sejarah	:
		<textarea name="sejarah" placeholder="Text Artikel"> </textarea>
		<br><br>
		<input type="submit" name="submit">
 	</form>
</body>
</html>