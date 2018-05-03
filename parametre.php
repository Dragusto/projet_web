<!DOCTYPE html>
<html>

	<head>

    <title>Upload d'une image sur le serveur !</title>

	</head>

  	<body>
 	
 	<?php
      if( !empty($message) ) 
      {
        echo '<p>',"\n";
        echo "\t\t<strong>", htmlspecialchars($message) ,"</strong>\n";
        echo "\t</p>\n\n";
      }
    ?>
	

	<form enctype="multipart/form-data" action="parametreEmail.php" method="post">

    	<fieldset>
			<p>
           		<table>

		   		<tr>
					<td> <label>Adresse mail :</label> </td> 
					<td><input type="text" name="email1"/></td>
				</tr>

				<tr>
				<td><label>Nouvelle adresse mail : </label></td>
				<td><input type="text" name="email2"/></td>
				</tr>

			 	<tr>
					<td>Mot de passe : </td>
					<td><input type="password" name="mdp"</td>
				</tr>

				<tr>
					<td colspan="2"> <input type="submit" value="Changer email"></td>
				</tr>
		
				<?php
            		if(isset($_GET["error_message2"]))
            		{
              			$error_message2 = $_GET["error_message2"];
        		?>
        
        	<p style = "color : red"> <?php echo $error_message2; ?></p>
          
        	<?php } ?>

			<?php
            	if(isset($_GET["message2"]))
            	{
              		$message2 = $_GET["message2"];
        	?>
        
        <p style = "color : green"> <?php echo $message2; ?></p>
          
        <?php } ?>
		</table>

		</p>

	 	</fieldset>

    </form>

    <form enctype="multipart/form-data" action="parametreMDP.php" method="post">
    
    	<fieldset>
			
			<p>
				
				<table>

            		<tr>
						<td><label>Mot de passe : </label></td>
						<td><input type="password" name="mdp"></td>
					</tr>
					

					<tr>
						<td><label>Nouveau mot de passe : </label></td>
						<td><input type="password" name="mdp1"></td>
					</tr>

					<tr>
						<td><label>Confirmer nouveau mot de passe : </label></td>
						<td><input type="password" name="mdp2"></td>
					</tr>

					<tr>
						<td colspan="2"> <input type="submit" value="Changer de mot de passe"></td>
					</tr>
		
					<?php
            			if(isset($_GET["error_message"]))
            			{
              				$error_message = $_GET["error_message"];
        			?>
        
        			<p style = "color : red"> <?php echo $error_message; ?></p>
          
        			<?php } ?>
		
					<?php
            			if(isset($_GET["message"]))
            			{
              				$message = $_GET["message"];
        			?>
        
        			<p style = "color : green"> <?php echo $message; ?></p>
          
        			<?php } ?>
				
				</table>

			</p>

		</fieldset>

    </form>
	

	<form enctype="multipart/form-data" action="parametreAdresse.php" method="post">

    	<fieldset>

			<p>

			<table>

            	<tr>
					<td><label>Numéro : </label></td>
					<td><input type="text" name="num"/></td>
				</tr>

				<tr>
					<td><label>Rue, bd, etc. : </label></td>
					<td><input type="text" name="rue"/></td>
				</tr> 

				<tr>
					<td><label>Ville : </label></td>
					<td><input type="text" name="city"/></td>
				</tr> 

				<tr>
					<td><label>Code Postal : </label></td>
					<td><input type="text" name="post"/></td>
				</tr> 

				<tr>
					<td><label>Mot de passe : </label></td>
					<td><input type="password" name="mdp"></td>
				</tr> 

				<tr>
					<td colspan="2"> <input type="submit" value="Changer adresse"></td>
				</tr>
		
				<?php
            		if(isset($_GET["error_message3"]))
            		{
              			$error_message3 = $_GET["error_message3"];
        		?>
        
        		<p style = "color : red"> <?php echo $error_message3; ?></p>
          
        		<?php } ?>
				
				<?php
            		if(isset($_GET["message3"]))
            		{
              			$message3 = $_GET["message3"];
        		?>
        
        		<p style = "color : green"> <?php echo $message3; ?></p>
          
        		<?php } ?>

			</table>

			</p>

	  	</fieldset>

    </form>

	
   	<form enctype="multipart/form-data" action="parametreImage.php" method="post">
    
    	<fieldset>

          	<p>
          		
            	<label for="fichier_a_uploader" title="Recherchez le fichier à uploader !">Envoyer le fichier :</label>

            	<input name="fichier" type="file" id="fichier_a_uploader" />

            	<input type="submit" name="submit" value="Uploader" />
			
				<?php
            	if(isset($_GET["error_message1"]))
            	{
              	$error_message1 = $_GET["error_message1"];
				?>
        
				<p style = "color : red"> <?php echo $error_message1; ?></p>
          
        		<?php } ?>

				<?php
            		if(isset($_GET["message1"]))
            		{
              		$message1 = $_GET["message1"];
        		?>
        
        		<p style = "color : green"> <?php echo $message1; ?></p>
          
        		<?php } ?>

          	</p>

      	</fieldset>

    </form>
	
    

  	</body>

</html>