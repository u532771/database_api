<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<h2>Read all</h2>
	<hr>
	<?php
	include("product/read_all.php");
	include("product/delete.php");
	?>
	<hr>
	

	
	<h2>Read One</h2>
	<hr>
	<form action="" method="post">
		<input type="text" name="read_one_input" id="read_one_input" placeholder="Id" required>
		<input type="submit" value="ophalen" name="read_one_submit">
	</form>
	<?php
	include("product/read_one.php");
	?>
	<hr>

	<h2>Create</h2>
	<hr>
		<form action="" method="post">
			<input type="text" name="create_naam_input" id="create_one_input" placeholder="naam" required>
			<input type="text" name="create_beschrijving_input" id="create_beschrijving_input" placeholder="beschrijving" required>
			<input type="number" name="create_prijs_input" id="create_prijs_input" placeholder="prijs" required>
			<input type="number" name="create_categorie_input" id="create_categorie_input" placeholder="categorie id" required>
			<input type="submit" value="maken" name="create_submit">
		</form>
		<?php
			include('product/create.php');
		?>
	<hr>
	
	<h2>Update</h2>
	<hr>
		<?php
			include('product/update.php');
		?>
	<hr>
	 
</body>
</html>