<?php
session_start();
?>

<!DOCTYPE html>
<html>

	<?php
		$database = "piscine";
		$db_handle = mysqli_connect('localhost', 'root', 'root');
		$db_found = mysqli_select_db($db_handle, $database);
	
		$id = $_SESSION['id'];
		$sql = "SELECT * FROM membre WHERE id = '$id'";
		$tab = mysqli_query($db_handle, $sql);
		$row= mysqli_fetch_array($tab);
		$nom = $row['nom'];
		$prenom = $row['prenom'];
		$job = $row['travail'];
	?>

    <head>

        <title>ECEconnect</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="css/sommairecss.css" rel="stylesheet" type="text/css" />

    </head>

	<header>

        <div id="titre">
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

		<div class="rechercher">
			<form id="formulaire" action="rechercherTraitement.php" method="post">
				<tr>
					<td><input onKeyPress="if(event.keyCode == 13) validerForm();" type="text" name="recherche" placeholder="rechercher profil"></td>
				</tr>   
			</form>
			<?php
            if(isset($_GET["error_message10"]))
            {
              $error_message10 = $_GET["error_message10"];
        ?>
        
        <p style = "color : red"> <?php echo $error_message10; ?></p>
          
        <?php } ?>
		</div>

		<div class="pr">
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
			<p><?php echo $nom;?> </p>
			<p><?php echo $prenom; ?></p>
			<p><?php if (!$job){}else{echo $job;}?></p>

		</div>

	</header>
			

	
    <body>
	
	

	<section>

			<div id="titre2">

				<h2>Fil d'actualités</h2>

			</div>

			<?php

				$database = "piscine";
				$db_handle = mysqli_connect('localhost','root','root');
				$db_found = mysqli_select_db($db_handle, $database);


				$sql = "SELECT * FROM evenement";
				$result = mysqli_query($db_handle, $sql);


				while($data = mysqli_fetch_assoc($result))		
				{												
					echo "Titre de l'evenement: ".$data['titre'].'<br>';
					echo "Date de l'evenement: ".$data['date_event'].'<br>';
					echo "Date publié: ".$data['date_poste'].'<br>';
					echo "Heure publié: ".$data['heure'].'h<br><br>';
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