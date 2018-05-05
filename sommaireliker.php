<?php
<<<<<<< HEAD
session_start();
?>
<!DOCTYPE html>
<html>
<?php
	$id_evenement = $_SESSION['id_evenement'];

	$database = "piscine";
	$db_handle = mysqli_connect('localhost','root','');
=======

	$id_evenement = $_SESSION['id_evenement'];

	$database = "piscine";
	$db_handle = mysqli_connect('localhost','root','root');
>>>>>>> acb8d0f05ccbea6e547a591204b5138cbeb1c66b
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found)
	{
		$sql = "SELECT nb_like FROM evenement WHERE id_evenement = '$id_evenement'";
		$result = mysqli_query($db_handle, $sql);
<<<<<<< HEAD

		$data = mysqli_fetch_assoc($result);
		$nb_like = $data['nb_like'];
		$nb_like = $nb_like + 1;

		$sql = "UPDATE evenement SET nb_like = '$nb_like' WHERE id_evenement = '$id_evenement'";
		
			if(mysqli_query($db_handle, $sql))
			{
				echo $nb_like;
=======
		//$result = $result+1;
		//echo "$result";
		$data = mysqli_fetch_assoc($result);
		$nb_like .= $data['nb_like']+1; 

		$sql = "UPDATE evenement SET nb_like = '$nb_like' WHERE id_evenement = '$id_evenement'";
			
			if(mysqli_query($db_handle, $sql))
			{
				echo "liké <br>";
>>>>>>> acb8d0f05ccbea6e547a591204b5138cbeb1c66b
			}
			
			else
			{
				echo "ERROR: impossible d'executer la requete $sql. <br>" . mysqli_error($db_handle);
			}	
	}
	
<<<<<<< HEAD
?>
	<meta http-equiv="refresh" content="1;sommaire.php"/>

</html>
=======
?>
>>>>>>> acb8d0f05ccbea6e547a591204b5138cbeb1c66b
