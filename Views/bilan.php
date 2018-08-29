<!DOCTYPE html>
<html>
<head>
	<title>Bilan</title>
</head>
<body>
	<?php echo $resultat; ?>
	<h1>Bilan des notes</h1>
	<table>
		<tr>
			<th>Matricule</th>
			<th>Note</th>
		</tr>

		<?php
		
		for ($id = 0; $id<count($matricule); $id++)
		{ 
			echo('<tr><td>'.$matricule[$id].'</td><td>'.$grade[$id].'</td></tr>');
		}
		?>

	</table>
</body>
</html>