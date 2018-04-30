<?php
	$database = "piscine";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);


	$nom = isset($_POST["nom"])? $_POST["nom"]:"";
	$prenom = isset($_POST["prenom"])? $_POST["prenom"]:"";
	$email = isset($_POST["mail"])? $_POST["mail"]:"";
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

	if($email == ""){
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
		
		// Hachage du mot de passe
		$mdp_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

		// Insertion
		$sql = "INSERT INTO utilisateur(email, mdp, nom, prenom) VALUES('$email','$mdp_hache','$nom','$prenom')";
		if(mysqli_query($db_handle, $sql))
		{
			echo "utilisateur ajouté";
		}
		else
		{
			echo "utilisateur non ajouté";
		}
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