<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php
	$database = "piscine";
	$db_handle = mysqli_connect('localhost', 'root', '');
	$db_found = mysqli_select_db($db_handle, $database);
	
$id = $_SESSION['id'];
$sql = "SELECT * FROM membre WHERE id = '$id'";
$tab = mysqli_query($db_handle, $sql);
$row= mysqli_fetch_array($tab);
$nom = $row['nom'];
$prenom = $row['prenom'];
$email = $row['email'];
$job = $row['travail'];
$birth = $row['date de naissance'];
$city = $row['ville'];
$adresse = $row['adresse'];
?>

<head>
        <title>Nom du projet</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="css/vouscss.css" rel="stylesheet" type="text/css" />
    </head>
		<!-- Here is the menu area -->
	<header>
        <div id="titre">
            <h1>Nom du projet</h1>     
        </div>
		<nav>
			<ul>
				<a href="sommaire.php">Acceuil </a>
				<a href="reseau.php">Reseau </a>
				<a href="emploi.php">Emploi </a>
				<a href="messagerie.php">Messagerie </a>
				<a href="notification.php">Notification </a>
				<a href="vous.php">Profil </a>
			</ul>
		</nav>
		
	</header>
	<div class="pr">
			<a href="parametre.php">Paramètre</a>
		</div>
	<body>
		<p> <?php echo $nom; ?> </p>
		<p> <?php echo $nom; ?> </p>
		<p> <?php echo $nom; ?> </p>
		<p> <?php echo $nom; ?> </p>

	</body>
	<div id="footer">

			<p>Droit d'auteur © 2018 Nom du projet</p> 
			<p> Dernière mise à jour le 30/04/2018 | 
				<a href="mailto:nomDuProjet@gmail.com">nomDuProjet@gmail.com</a> 
			</p>

	</div>
</html>