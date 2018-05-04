<!DOCTYPE html>
<html>

<?php

	$titre = isset($_POST["titre"])? $_POST["titre"]:"";
	$date1 = isset($_POST["date1"])? $_POST["date1"]:"";
	$datep = isset($_POST["datep"])? $_POST["datep"]:"";
	$heure = isset($_POST["heure"])? $_POST["heure"]:"";

	$connection = false;
	$error = "";

	if($titre == ""){
		$error .= "Titre est vide. ";
	}

	if($date1 == ""){
		$error .= "Date est vide. ";
	}

	if($datep == ""){
		$error .= "Date-poste est vide. ";
	}

	if($heure == ""){
		$error .= "Heure est vide. ";
	}


	if($error == "")
	{
		echo "Formulaire valide <br/><br/>";
		$database = "piscine";
		$db_handle = mysqli_connect('localhost','root','root');
		$db_found = mysqli_select_db($db_handle, $database);
		

		if($db_found)
		{
				// Insertion
				$sql = "INSERT INTO evenement(date_event, titre, date_poste, heure) VALUES('$date1','$titre',$datep ,'$heure')";
			
				if(mysqli_query($db_handle, $sql))
				{
					echo "Votre publication a bien été créée <br>";
				}
			
				else
				{
					echo "ERROR: impossible d'executer la requete $sql. <br>" . mysqli_error($db_handle);
				}
		
		}

		else
		{
			echo "Database not found <br>";
		}
	
	}

	else
	{
		Redirect('publier.php?error_message='.'<br>Veuillez remplir tous les champs', false);
	}


		function Redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, $permanent ? 301 : 302);
        exit();
    }


?>

	<div id="accueil">

		<form action="sommaire.php" method="post">

			<tr>
				<td colspan="2"> <input type="submit" value="Retourner à l'accueil"\></td>
			</tr>

		</form>

	</div>



	<div id="publ">

		<form action="publier.php" method="post">

			<tr>
				<td colspan="2"> <input type="submit" value="Publier un autre evenement"\></td>
			</tr>

		</form>

	</div>



	<div id="footer">

        <p>Droit d'auteur Giot Chabennet © 2018 ECEconnect</p> 

        <p> Dernière mise à jour le 2/05/2018 |

        <a href="mailto:ECEconnect@gmail.com">ECEconnect@gmail.com</a> 
        
        </p>

	</div>

</html>