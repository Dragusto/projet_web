<?php
	
	$database = "piscine";
	$db_handle = mysqli_connect('localhost','root','root');
	$db_found = mysqli_select_db($db_handle, $database);

	$nom = isset($_POST["nom"])? $_POST["nom"]:"";


	$sql = "SELECT * FROM membre WHERE nom = '$nom'";
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