<!DOCTYPE html>
<html>
    <head>
        <title>projet piscine</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <body>
        <h2>Connection</h2>
        
        <p>
            Veuillez rentrer les information pour vous connecter.<br />   
        </p>

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

        <form action="indextraitement.php" method="post">
          <table id="myTable">
            <tr>
              <td>Email</td>
              <td><input type="text" name="email"></td>
            </tr>

            <tr>
              <td>Mot de passe:</td>
              <td><input type="password" name="mdp"></td>
            </tr>

           
            </tr>        
              
            <tr>
              <td colspan="10"><input type="submit" value="Soumettre"></td>
            </tr>
			
          </table>
        </form>
		<form action="inscription.php" method="post">
		<tr>
              <td colspan="10"><input type="submit" value="Inscription"></td>
        </tr>
		</form>

    </body>
</html>
