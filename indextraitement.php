<!DOCTYPE html>
<html>

<?php
	$database = "piscine";
	$db_handle = mysqli_connect('localhost', 'root', 'root');
	$db_found = mysqli_select_db($db_handle, $database);

    
    $email = isset($_POST["email"])?$_POST["email"] : "";
    $mdp = isset($_POST["mdp"])?$_POST["mdp"] : "";
    $error = "";

    if($email == ""){
    	$error .= "Email est vide.";
    }

    //$stat = "";

    //$error1 = "";
    //$error2 = "";
    //$error3 = "";
	//$error4 = "Combinaison email et mot de passe invalide";
    //$errorun = 0;
    //$errordeux = 0;
    //$connec = false;
	
    //if($email == "") {$error2 = $error2." adresse mail -"; $errorun++;}
    //if($mdp == "") {$error2 = $error2." mot de passe "; $errorun++;}
    

    //if($errorun > 0) {$error1 = "Il manque le champ : "; $error3 = "le remplir.";}
    //if($errorun > 1) {$error1 = "Il manque les champs : "; $error3 = "les remplir.";}    
    //if($errorun > 0)
	//{
		//Redirect('index.php?error_message='.$error1.$error2.'<br>Merci de '.$error3, false);
	//}
	
	// vérification de la connection
	$sql = "SELECT mdp FROM utilisateur2 WHERE email = '$email'";
	$MDP = mysqli_query($db_handle, $sql);
	
	// Comparaison du mdp envoyé via le formulaire avec la base
	//$isPasswordCorrect = password_verify($mdp, $a);
	
	if ($MDP != $mdp)
	{	
		echo 'Mauvais identifiant ou mot de passe !';
	}

	else if($mdp == $MDP)
	{
		?>	
			<meta http-equiv="refresh" content="1;sommaire.php"/>
		<?php	
	}

	    function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
    }
    
?>

</html>