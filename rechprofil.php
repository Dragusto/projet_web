<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php
	$database = "piscine";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);
	
$id = $_SESSION['id_search'];
$sql = "SELECT * FROM membre WHERE id = '$id'";
$tab = mysqli_query($db_handle, $sql);
$row= mysqli_fetch_array($tab);
$nom = $row['nom'];
$prenom = $row['prenom'];
$email = $row['email'];
$job = $row['travail'];
$birth = $row['date_de_naissance'];
$city = $row['ville'];
$adresse = $row['adresse'];
?>

<head>
        <title>Nom du projet</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" href="css/vouscss.css" media="screen" type="text/css">
    </head>
	<header>
		<div class="titre">
            <h1>ECE connect</h1>     
        </div>
		<nav>
			<ul>
				<a href="sommaire.php">Accueil </a>
				<a href="reseau.php">Reseau </a>
				<a href="emploi.php">Emploi </a>
				<a href="messagerie.php">Messagerie </a>
				<a href="notification.php">Notification </a>
				<a href="vous.php">Profil </a>
			</ul>
		</nav>
	</header>
	<div class="pr">
		<?php 
		$chemin = 'CV/'.$id.'.pdf';
		if (is_file($chemin))
		{?>
		<p><a href="CV/<?php echo $id.".pdf";?>">Curriculum vitae</a></p>
		<?php } ?>
	</div>
	

	<div id="pro">
		<?php
		$chemin1 = "profil/$id.jpg";
		if (is_file($chemin1))
		{?>
		<p><img src = profil/<?php echo $id;?>></p>
		<?php } 
		else
		{?>
			<p><img src = "profil/0"></p>
		<?php } ?>
		<p> Nom : <?php echo $nom; ?> </p>
		<p> Prénom : <?php echo $prenom; ?> </p>
		<?php if(!$adresse){}
		else{echo 'Adresse : '.$adresse; } ?><p> <p/><?php
		if(!$job){}
		else{ echo 'Statut : '.$job;}?><p> </p><?php
		if(!$birth){}
		else{ echo 'Date de naissance : '.$birth;}?><p> </p>
		</div>
	<body>
		
	</body>
	<div id="footer">

			<p>Droit d'auteur © 2018 Nom du projet</p> 
			<p> Dernière mise à jour le 30/04/2018 | 
				<a href="mailto:nomDuProjet@gmail.com">nomDuProjet@gmail.com</a> 
			</p>

	</div>
</html>