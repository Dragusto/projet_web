<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=piscine;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$remail = $bdd->query('SELECT email FROM utlisateur');
$rmdp = $bdd->query('SELECT mdp FROM utlisateur');

    
    $email = isset($_POST["email"])?$_POST["email"] : "";
    $mdp = isset($_POST["mdp"])?$_POST["mdp"] : "";
    $stat = "";

    $error1 = "";
    $error2 = "";
    $error3 = "";
	$error4 = "Combinaison email et mot de passe invalide";
    $errorun = 0;
    $errordeux = 0;
    
	
    if($email == "") {$error2 = $error2." adresse mail -"; $errorun++;}
    if($mdp == "") {$error2 = $error2." mot de passe "; $errorun++;}
    

    if($errorun > 0) {$error1 = "Il manque le champ : "; $error3 = "le remplir.";}
    if($errorun > 1) {$error1 = "Il manque les champs : "; $error3 = "les remplir.";}    
    if($errorun > 0)
	{
		Redirect('index.php?error_message='.$error1.$error2.'<br>Merci de '.$error3, false);
	}
	
	if($email != $remail){$errordeux++;}
	if($mdp != $rmdp){$errordeux++;}
	if($errordeux > 0){Redirect('index.php?error_message='.$error4, false);}

	    function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
    }
?>