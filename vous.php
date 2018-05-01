<!DOCTYPE html>

<html>

	<head>

		<title>Nom du projet</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="vouscss.css" rel="stylesheet" type="text/css">

	</head>

	<header>

		<div id="titre">
			<h1>Nom du projet</h1>
		</div>

		<nav>
			<ul>
				<a href="acceuil.php">Accueil </a>
				<a href="reseau.php">Reseau </a>
				<a href="emploi.php">Emploi </a>
				<a href="messagerie.php">Messagerie </a>
				<a href="notification.php">Notification </a>
				<a href="profil.php">Profil</a>
			</ul>
		</nav>

	</header>

	<body>
		<div id="monReseau">
			<div id="titre2">
				<h2>Utiliser le filtrage par nom</h2>
			</div>
		
			<form action="vousTraitement.php" method="post">

				<table id="ma Table">

					<tr>
						<td>Nom : </td>
						<td><input type="text" name="nom"/></td>
					</tr>

					<tr>
						<td colspan="2"><input type="Submit" value="Soumettre"/></td>
					</tr>

				</table>
			</form>
		</div>
	</body>

	<div id="footer">

			<p>Droit d'auteur © 2018 Nom du projet</p> 
			<p> Dernière mise à jour le 30/04/2018 | 
				<a href="mailto:nomDuProjet@gmail.com">nomDuProjet@gmail.com</a> 
			</p>

	</div>
</html>