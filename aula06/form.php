<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>4 linux </title>
</head>
<body>
	<h2>Meu form </h2>
	<form action= "" method="post">
		<label>NOME:</label>
		<input type= "text" name= "nome">
		<label>idade:</label>
		<input type= "number" name= "idade">
		<label>email:</label>
		<input type= "text" name= "email">
		<label>altura:</label>
		<input type= "text" name= "altura">
		<input type= "submit" value= "enviar">
	</form>

	<?php
			if (!empty($_POST)) {
				echo "POST:";
				print_r($_POST);
			}
			if (!empty($_GET)) {
				echo "<hr>";
				echo "GET";
				print_r($_GET);
			
		}
	?>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>