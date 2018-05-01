<?php
	$nom = isset($_POST["nom"])? $_POST["nom"]:"";
	$prenom = isset($_POST["prenom"])? $_POST["prenom"]:"";
	$email = isset($_POST["email"])? $_POST["email"]:"";
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

	if($email == ""){
		$error .= "Mail est vide<br/>";
	}

	if($mdp == ""){
		$error .= "Mot de passe vide<br/>";
	}

	if($mdp != $mdp1){
		$error .= "Les mots de passe sont differents";
	}

	try
	{
		$bdd = new PDO('mysql:host=127.0.0.1:8889;dbname=piscine;charset=utf8', 'root', 'root');
	}
	catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}

	$req = $bdd->prepare('INSERT INTO utilisateur(email, mdp, nom, prenom) VALUES('$email','$mdp_hache','$nom','$prenom')');
	$req->execute(array(
	'email' => $email,
	'mdp' => $mdp_hache,
	'nom' => $nom,
	'prenom' => $prenom
	));
	//$req->execute(array('email' => $email,'mdp' => $mdp_hache,'nom' => $nom,'prenom' => $prenom);

echo 'Inscrit !';

?>