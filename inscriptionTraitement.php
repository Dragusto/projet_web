<?php
	$nom = isset($_POST["nom"])? $_POST["nom"]:"";
	$prenom = isset($_POST["prenom"])? $_POST["prenom"]:"";
	$mail = isset($_POST["mail"])? $_POST["mail"]:"";
	$mdp = isset($_POST["mdp"])? $_POST["mdp"]:"";
	$mdp1 = isset($_POST["mdp1"])? $_POST["mdp1"]:"";


	$connection = false;
	$error = "";

	if($nom == ""){
		$error .= "Nom est vide, ";
	}

	if($prenom == ""){
		$error .= "Prenom est vide, ";
	}

	if($mail == ""){
		$error .= "Mail est vide, ";
	}

	if($mdp == ""){
		$error .= "Mot de passe vide.";
	}

	if($mdp != $mdp1){
		$error .= "Les mots de passe sont differents";
	}


	if($error == ""){
		echo "Formulaire valide <br/><br/>";
		$connection = true;
	}

	
	else{
		Redirect('inscription.php?error_message='.$error, false);
	}

	function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
    }
	
?>