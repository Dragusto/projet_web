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

		<div class="publi">

		<?php
		if(isset($_GET["error_message10"]))
            {
              $error_message10 = $_GET["error_message10"];
        ?>
        
        <p style = "color : red"> <?php echo $error_message10; ?></p>
          
        <?php } ?>

			<?php
          		if(isset($_GET["error_message"]))
          		{
             	$error_message = $_GET["error_message"];
        	?>
          	<p style = "color : red"> 
          	<?php echo $error_message; ?>
          	</p>
        	<?php
          	}
			?>

			<form action="publierTraitement.php" method="post">

				<table id="publication">

					<tr>
						<td>Titre de l'evenement : </td>
						<td><input type="text" name="titre"/></td>
					</tr>

					<tr>
						<td>Date de l'evenement : </td>
						<td><input type="date" name="date1"/></td>
					</tr>

					<tr>
						<td colspan="2"><input type="Submit" value="Publier"/></td>
					</tr>

				</table>

			</form>
			
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

			<p><img src = profil/<?php echo $id;?>></p>
			<p><?php echo $nom;?> </p>
			<p><?php echo $prenom; ?></p>
			<p><?php if (!$job){}else{echo $job;}?></p>
		</div>

	</header>
			

	
    <body>
	
	

	<section>

			<div id="titre2">

				<h2>Fil d'actualités</h2>


			<?php

				$database = "piscine";
				$db_handle = mysqli_connect('localhost','root','root');
				$db_found = mysqli_select_db($db_handle, $database);


				$sql = "SELECT * FROM evenement";
				$result = mysqli_query($db_handle, $sql);


				while($data = mysqli_fetch_assoc($result))		
				{		

					echo "Titre de l'evenement: ".$data['titre'].'<br>';

					echo "Date de l'evenement: ".$data['date_evenement'].'<br>';

					echo "Date publiée: ".$data['temps'].'<br>';

					echo "id evenement: ".$data['id_evenement'].'<br>';

					?>

					<form action="sommaireliker.php" method="post">

						<tr>
							<td> id de l'evenement a liker </td>
							<td> <input type="number" name="id_evenement"\></td>
						</tr>

						<tr>
							<td> <input type="submit" value="liker"\> </td>
						</tr>

					</form>

					<?php

					echo "Nombre de like: ".$data['nb_like'].'<br><br>';

				}

			?>

			</div>

	</section>
	
	<div id="footer">

        <p>Droit d'auteur Giot Chabennet © 2018 ECEconnect</p> 

        <p> Dernière mise à jour le 2/05/2018 |

        <a href="mailto:ECEconnect@gmail.com">ECEconnect@gmail.com</a> 
        
        </p>

    </div>
	
	</body>
	
	
</html>