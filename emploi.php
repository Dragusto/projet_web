<!DOCTYPE html>

<html>

	<head>

		<title>ECEconnect</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="css/emploicss.css" rel="stylesheet" type="text/css">

	</head>

	<header>

		<div id="titre">
			<h1>ECEconnect</h1>
		</div>

		<nav>
			<ul>
				<a href="sommaire.php">Accueil </a>
				<a href="reseau.php">Reseau </a>
				<a href="emploi.php">Emploi </a>
				<a href="messagerie.php">Messagerie </a>
				<a href="notification.php">Notification </a>
				<a href="vous.php">Profil</a>
			</ul>
		</nav>

	</header>

	<body>

			<div id="titre2">
				<h2>Voici la liste des emplois</h2>
			</div>
		
		<div id="maListe">

			<?php
				$database = "piscine";
				$db_handle = mysqli_connect('localhost','root','root');
				$db_found = mysqli_select_db($db_handle, $database);


				$sql = "SELECT * FROM emploi";
				$result = mysqli_query($db_handle, $sql);		
				while($data = mysqli_fetch_assoc($result))		
				{												
					echo "Travail: ".$data['travail'].'<br>';
					echo "Lieu: ".$data['lieu'].'<br>';
					echo "Date de début: ".$data['dateDebut'].'<br>';
					echo "Contrat: ".$data['contrat'].'<br><br>';
				}
			?>
		</div>
	</body>

	<div id="footer">

        <p>Droit d'auteur Giot Chabennet © 2018 ECEconnect</p> 

        <p> Dernière mise à jour le 2/05/2018 |

        <a href="mailto:ECEconnect@gmail.com">ECEconnect@gmail.com</a> 
        
        </p>

	</div>
</html>