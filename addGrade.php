<?php

require_once "Models/addNote.php";

if (isset($_POST['grade']) && isset($_POST['matricule'])){
	$matricule = $_POST['matricule'];
	$grade = $_POST['grade'];

	$resultat = ajoutNote($matricule, $grade);

	unset($matricule);
	unset($grade);
}

require_once "Views/ajoutNote.php";
?>