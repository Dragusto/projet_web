<?php

	$id_evenement = isset($_POST["id_evenement"])?$_POST["id_evenement"] : "";

	$database = "piscine";
	$db_handle = mysqli_connect('localhost','root','root');
	$db_found = mysqli_select_db($db_handle, $database);

	if($db_found)
	{
		$sql = "SELECT * FROM evenement WHERE id_evenement = '$id_evenement'";
		$result = mysqli_query($db_handle, $sql);
		//$result = $result+1;
		//echo "$result";
		$data = mysqli_fetch_assoc($result);
		$nb_like .= $data['nb_like'];

		$sql = "UPDATE evenement SET nb_like = '$nb_like' WHERE id_evenement = '$id_evenement'";
			
			if(mysqli_query($db_handle, $sql))
			{
				echo "liké <br>";
			}
			
			else
			{
				echo "ERROR: impossible d'executer la requete $sql. <br>" . mysqli_error($db_handle);
			}	
	}
	













?>