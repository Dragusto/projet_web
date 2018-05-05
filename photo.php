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
$birth = $row['date_de_naissance'];
$city = $row['ville'];
$adresse = $row['adresse'];
?>

	<head>
       
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" href="css/vouscss.css" media="screen" type="text/css">
    </head>
		<!-- Here is the menu area -->
	<header>
        <div class="titre">
            <h1>ECE Connect</h1>     
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
	
	<body>
	
	
	<p> affichage ici</p>
	
	
	
	
	 <form enctype="multipart/form-data" action="photoTraitement.php" method="post">
    <fieldset>
          <p>
            <label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Uploader des photos :</label>
           <input type="file" name="uploaded_files[]" multiple />
            <input type="submit" name="submit" value="Uploader" />
          </p>
      </fieldset>
    </form>
	
	
	</body>
	
	
	
	
</html>