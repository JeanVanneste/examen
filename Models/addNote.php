<?php

function ajoutNote($matricule, $grade)
{
	$resultat = "ko";
	try 
	{
		$conn = new PDO('pgsql:host=server;dbname=examen', 'examen', 'password');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "INSERT INTO grades(matricule, grade) VALUES ($matricule, $grade)";
		$conn->exec($sql);
		$resultat = "Note enregistrée";
	}
	catch (PDOException $e)
	{
		$resultat = 'Erreur : ' . $e->getmessage();
	}

	$conn = null;

	return $resultat;

}
?>