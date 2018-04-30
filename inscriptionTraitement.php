<?php
	$nom = isset($_POST["nom"])? $_POST["nom"]:"";
	$prenom = isset($_POST["prenom"])? $_POST["prenom"]:"";
	$mail = isset($_POST["mail"])? $_POST["mail"]:"";
	$mdp = isset($_POST["mdp"])? $_POST["mdp"]:"";
	$mdp1 = isset($_POST["mdp1"])? $_POST["mdp1"]:"";


	$connection = false;
	$error = "";

	if($nom == ""){
		$error .= "Nom est vide<br/>";
	}

	if($prenom == ""){
		$error .= "Prenom est vide<br/>";
	}

	if($mail == ""){
		$error .= "Mail est vide<br/>";
	}

	if($mdp == ""){
		$error .= "Mot de passe vide<br/>";
	}

	if($mdp != $mdp1){
		$error .= "Les mots de passe sont differents";
	}


	if($error == ""){
		echo "Formulaire valide <br/><br/>";
		$connection = true;
	}

	else{
		echo "Erreur : $error";
	}

	
?>