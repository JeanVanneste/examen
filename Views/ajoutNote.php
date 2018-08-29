<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ajouter note</title>
</head>
<body>
	<?php echo($resultat); ?>
	<h1>Ajouter une nouvelle note</h1>
	<form action="addGrade.php" method="post">
		Matricule :
		<input type="text" name="matricule"><br />
		Note :
		<input type="text" name="grade"><br />
		<input type="submit" value="Suivant">
		<input type="submit" formaction="end.php" value="Terminer">
	</form>
</body>
</html>