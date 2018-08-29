<?php

require_once "Models/addNote.php";



if (isset($_POST['grade']) && isset($_POST['matricule'])){
	$matricule = $_POST['matricule'];
	$grade = $_POST['grade'];

	$resultat = ajoutNote($matricule, $grade);

	unset($matricule);
	unset($grade);
}


try
{
	$conn = new PDO('pgsql:host=server;dbname=examen', 'examen', 'password');
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$result = $conn->query('SELECT matricule, grade FROM grades ORDER BY matricule ASC;');

	$id = 0;
	while ($data = $result->fetch())
	{
		$matricule[$id] = $data['matricule'];
		$grade[$id] = $data['grade'];
		$id = $id + 1;
	}
}
catch (PDOException $e)
{
	echo('Erreur : ' . $e->getmessage());
}


$conn = null;



require_once 'Views/bilan.php';

?>