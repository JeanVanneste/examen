<?php

function retrieveAllGrades()
{
	try
	{
		$conn = new PDO('pgsql:host=server;dbname=examen', 'examen', 'password');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$result = $conn->query('SELECT matricule, grade FROM grades ORDER BY matricule ASC');
		return $result;
	}
	catch (PDOException $e)
	{
		echo('Erreur : ' . $e->getmessage());
	}

	$conn = null;
}

?>