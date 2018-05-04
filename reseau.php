<!DOCTYPE html>

<html>

	<head>

		<title>ECEconnect</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="css/reseaucss.css" rel="stylesheet" type="text/css">

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

				<h2>Voici les membres de votre réseau</h2>

			</div>

			<section>

				<?php
					$database = "piscine";
					$db_handle = mysqli_connect('localhost','root','root');
					$db_found = mysqli_select_db($db_handle, $database);


					$sql = "SELECT * FROM membre";
					$result = mysqli_query($db_handle, $sql);		
					while($data = mysqli_fetch_assoc($result))		
					{												
						echo "Nom: ".$data['nom'].'<br>';
						echo "Prenom: ".$data['prenom'].'<br>';
						echo "Date de naissance: ".$data['date de naissance'].'<br>';
						echo "Ville: ".$data['ville'].'<br>';
						echo "Travail: ".$data['travail'].'<br>';
						echo "Adresse: ".$data['adresse'].'<br>';
						echo "Email: ".$data['email'].'<br>';
						echo "ID: ".$data['id']."<br><br>";
					}
				?>
			</section>

		<div id="footer">

        <p>Droit d'auteur Giot Chabennet © 2018 ECEconnect</p> 

        <p> Dernière mise à jour le 2/05/2018 |

        <a href="mailto:ECEconnect@gmail.com">ECEconnect@gmail.com</a> 
        
        </p>

	</div>

	</body>
	
</html>