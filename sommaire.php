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
        <title>Nom du projet</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link href="css/sommairecss.css" rel="stylesheet" type="text/css" />
    </head>

	<header>

        <div id="titre">
            <h1>Nom du projet</h1>     
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

		<div class="publi">
			<p>Voici la ou on va publier</p>
		</div>
		<div class="pr">
			<?php echo $nom;?> <br />
			<?php echo $prenom; ?><br />
			<?php if (!$job){}else{echo $job;}?>
		</div>
	</header>
			

	
    <body>
	
	

	<section>

	<p>ans La Forme d’une ville, Julien Gracq écrivait :

2 J. Gracq, La Forme d’une ville, Paris, Corti, 1985, p. 2.
Habiter une ville, c’est y tisser par ses allées et venues journalières un lacis de parcours très généralement articulés autour de quelques axes directeurs2.

3 L’analyse qui est esquissée ici se veut en quelque sorte un commentaire en situation du récent arti (...)
2Mais qu’est-ce que la forme d’un texte ? Non pas la surface et l’apparence contre ce qui serait de l’ordre de l’essentiel, quelque part « au cœur ». Non pas l’instrument et le médium (linguistique, verbal, énonciatif…) contre ce qui serait le matériau solide de la signification. Non pas même la manière dont une pratique scripturale s’individualise. Mais quelque chose de plus mouvant et de plus décisif, peut-être : la façon dont une lecture et/ou une écriture marque, construit un dispositif textuel (construit le texte en dispositif, le cadastre, le repère), ou, ce qui revient au même, la façon dont un dispositif textuel est activé, calculé, dans une dynamique3. Une histoire d’allées et venues en somme, un lacis de parcours, comme nous le dit Gracq, dont il est vrai également qu’ils sont très généralement articulés autour de quelques axes directeurs.

3Quelles formes prennent alors nos parcours dans le texte racinien ? Quelles compositions possibles dessinent-ils ? Quels en sont les axes, les croisements, les nœuds ?

4Bien des configurations peuvent être modulées par les lecteurs et, de droit, les lectures possibles sont en nombre infinies. En proposant ici comme clef d’entrée dans le texte racinien la question de sa rhétoricité, en donnant aux auteurs des communications comme figure imposée d’analyser les œuvres comme déploiement d’une parole, nous avons fait le pari qu’il y aurait un intérêt et peut-être un gain en terme de savoir, de connaissance de Racine, à confronter et à faire dialoguer entre eux sur un corpus restreint des exercices critiques d’inspiration et de méthodologie à la fois mêlées et diverses (herméneutique, stylisticienne, historienne, rhétoricienne…). Peut-être pourrions-nous alors voir se dégager quelques grandes avenues, peut-être pourrions-nous progresser dans l’établissement de la cartographie des terres raciniennes.

1.
5Au vu du dossier que nous avons rassemblé, deux impressions dominent : la variété des diagnostics sur le mal racinien — puisque mal il y a, comme nous le verrons — et l’étonnante convergence des auteurs sur quelques lieux / nœuds du texte où semble donc se décider et se jouer le pari de ces lectures. Ou pour le dire autrement, si les interprétations sont plurielles quant aux usages de la parole et du discours dans les pièces de Racine, elles s’accordent cependant toutes pour se focaliser sur quelques scènes : l’adresse de Jocaste aux deux frères ennemis dans La Thébaïde (IV, 3), la confrontation des deux monstres sacrés Agrippine et Néron dans Britannicus (IV, 2), la rébellion de Monime contre Mithridate dans la pièce éponyme (IV, 4), ou encore deux imprécations, celle de Clytemnestre dans Iphigénie (V, 4), celle d’Athalie dans la pièce éponyme (V, 6).

6Qu’ont-elles donc de prototypique, ces joutes oratoires, et avec elles, bien d’autres scènes qui se mettent ensuite à leur ressembler, les réfléchissent, les modulent et les recoupent, jusqu’à établir, entre elles toutes, une première approche de la cohérence racinienne ? Y est explicitement thématisé ce qu’il faut bien nommer un dysfonctionnement de la parole, que l’on peut décrire en deux temps.

7Premier temps, Racine y déploie et y exhibe une technique oratoire puissante aux enjeux forts (c’est Jocaste exhortant les ennemis à s’entendre, c’est Agrippine se défendant contre Néron, c’est Mithridate reprochant à Monime son désamour, c’est Clytemnestre déroulant les ressources verbales de la malédiction). Disposé en une ou plusieurs tirades, chacun de ces développements exemplifie un des genres répertoriés de l’argumentation, la conciliatio (ou discours de (ré)conciliation), la purgatio (ou discours de disculpation), l’expostulatio (ou discours de remontrances sans rupture d’alliance), l’exprobratio (ou reproches véhéments).

8Deuxième temps, Racine y met en scène l’inefficacité et peut-être même l’inanité de la parole persuasive, à travers la résistance, l’insensibilité faudrait-il dire, du destinataire à la force des arguments adverses et le congé qu’il donne non pas simplement aux arguments (ce serait alors une réfutation), mais au fait même d’argumenter, de débattre : c’est Étéocle balayant comme des simagrées le rituel des exhortations de Jocaste aux embrassements, c’est Néron dénonçant l’abus de pouvoir dans les protestations d’Agrippine, c’est Monime refusant tout reproche et rompant l’idée même d’alliance, c’est le Dieu d’Israël fixant un sens préfiguratif non maîtrisé par les acteurs humains, c’est enfin Clytemnestre seule, sans aucune prise sur la logique dramatique. Tant et si bien que la scène, marquée par une entrée en force de Jocaste, d’Agrippine, de Mithridate, d’Iphigénie, d’Athalie, se solde par leur défaite (dans le cas de Jocaste et de Mithridate), par leur mise au pas (dans le cas d’Agrippine, subordonnée de fait à la clémence et au bon vouloir de Néron), par le hors-jeu où la situation de réception les met (pour Athalie comme pour Clytemnestre).

9Toutes les analyses de ce dossier le disent à leur façon : la rhétoricité de la parole sur la scène racinienne est à la fois surexposée — incontournable (voir la relecture de la stylistique spitzérienne par Anne Régent) — et comme inactivée.

2.
10Mais que faire alors de ce repérage, qui est en même temps plus de l’ordre de la focalisation sur un motif (dans la mesure où le texte lui-même le prend comme objet de la représentation) que de la reconstitution critique ? C’est ici que j’avancerai quelques propositions sur ce dont cet axe de lisibilité est le marqueur, afin de progresser dans l’élucidation d’une formule pouvant rendre compte du texte racinien. J’ajouterai que je n’irai guère plus loin dans le constat et qu’en tout cas, je m’abstiendrai d’en faire à mon tour une quelconque interprétation : j’essaierai tout au plus de remonter en amont, c’est-à-dire sur ce que ce constat implique quant au dispositif qui nous est donné à voir et à concevoir, à entendre et à comprendre.

23La forme du texte racinien, c’est un jardin aux sentiers qui bifurquent.</p>
	</section>
	
	<div id="footer">

    	<p>Droit d'auteur © 2018 Nom du projet</p> 
    	<p> Dernière mise à jour le 30/04/2018 | 
    	<a href="mailto:nomDuProjet@gmail.com">nomDuProjet@gmail.com</a> 
    	</p>

    </div>
	
	</body>
	
	
</html>