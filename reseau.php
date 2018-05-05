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

	$sql_rech = "SELECT id_1 FROM relation WHERE id_1 = '$id' or id_2 = '$id'";
	$tab_rech = mysqli_query($db_handle, $sql_rech);
	$array_id_search = array();
	while($row_rech = mysqli_fetch_assoc($tab_rech))
	{
		$array_id_search[$row_rech['id_1']] = $row_rech['id_1'];	
	}  

?>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="css/recherchercss.css" rel="stylesheet" type="text/css" />
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
	</header>

<<<<<<< HEAD
    <body>
	<?php
		foreach($array_id_search as $id_search)
		{?>
		<form enctype="multipart/form-data" action="rechprofil.php" method="post">
			<fieldset>
				<p>
					<table>
						<?php
						if($id_search != $id)
						{
							$sql_search = "SELECT * FROM membre WHERE id = '$id_search'";
							$tab_search = mysqli_query($db_handle, $sql_search);
							$row_search = mysqli_fetch_array($tab_search);
							$nom_search = $row_search['nom'];
							$prenom_search = $row_search['prenom'];
							$chemin1_search = "profil/$id_search.jpg";
							if (is_file($chemin1_search))
							{?>
								
								<a href = "rechprofil.php"> <img src = profil/<?php echo $id_search;?> > </a>
								<?php $_SESSION['id_search'] = $id_search;?>
								
							<?php } 
							else
							{?>							
								<a href = "rechprofil.php"> <img src = "profil/0"></a>
								<?php $_SESSION['id_search'] = $id_search;?>
							<?php } ?>
							<p> Nom : <?php echo $nom_search; ?> </p>
							<p> Prénom : <?php echo $prenom_search; ?> </p>
						<?php } ?>
					</table>
				</p>
			</fieldset>
		</form>
		<?php } ?>
		
	<div id="footer">
=======
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
>>>>>>> acb8d0f05ccbea6e547a591204b5138cbeb1c66b

        <p>Droit d'auteur Giot Chabennet © 2018 ECEconnect</p> 

        <p> Dernière mise à jour le 2/05/2018 |

        <a href="mailto:ECEconnect@gmail.com">ECEconnect@gmail.com</a> 
        
        </p>

<<<<<<< HEAD
    </div>
	
	</body>

<?php	function validerForm(){
    document.getElementById("rechercher").submit();
}?>
	
=======
	</div>

	</body>
>>>>>>> acb8d0f05ccbea6e547a591204b5138cbeb1c66b
	
</html>