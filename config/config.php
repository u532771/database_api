
	<!-- // Plaats hier de code die ervoor zorg dat er een database verbinding wordt aangemaakt. (met jouw gegevens!!) -->
<?php
 $con = mysqli_connect('localhost', 'root', '', 'api') or die('Cannot connect to database. '.mysqli_connect_error());
 if($con) echo 'You are connected!<br/>';
?>
