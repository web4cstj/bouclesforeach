<?php
/************************************************************************************************************
 ____  ____  ___    ____  _____  __  __  ___  __    ____  ___    ____  _____  ____  ____    __    ___  _   _ 
(  _ \( ___)/ __)  (  _ \(  _  )(  )(  )/ __)(  )  ( ___)/ __)  ( ___)(  _  )(  _ \( ___)  /__\  / __)( )_( )
 )(_) ))__) \__ \   ) _ < )(_)(  )(__)(( (__  )(__  )__) \__ \   )__)  )(_)(  )   / )__)  /(__)\( (__  ) _ ( 
(____/(____)(___/  (____/(_____)(______)\___)(____)(____)(___/  (__)  (_____)(_)\_)(____)(__)(__)\___)(_) (_)
=============================================================================================================
Rendre dynamique le code suivant en utilisant des boucles foreach dans une fonction
*************************************************************************************************************/

/* =============================================================================
 * DÉFINITION DES VARIABLES ET FONCTIONS (Se trouve normalement dans un include)
 * ============================================================================= */

/** @var array $regions  Tableau indexé commençant à 0 contenant les régions retrouvées dans le HTML final */
$regions = array('Abitibi-Temiscamingue', 'Bas Saint-Laurent', 'Capitale Nationale', 
	'Centre-du-Québec', 'Chaudière-Appalaches', 'Cote-Nord', 'Estrie', 'Gaspésie-Îles-de-la-Madeleine', 
	'Lanaudière', 'Laurentides', 'Laval', 'Mauricie', 'Montérégie', 'Montréal', 'Nord-du-Québec', 
	'Outaouais', 'Saguenay-Lac-Saint-Jean',);

/** fonction affichageMenuJours
 * Retourne un menu déroulant (<select>) contenant les jours de la semaine
 * @param integer $courant - La valeur à sélectionner (selected="selected") dans 
 *   le menu. Défaut = 0.
 * @return string - Le HTML du select
 * @var array $jours - La liste des jours dans un tableau indexé à 0 en 
 *   utilisant la méthode longue à plusieurs instructions.
 * @note L'attribut name du select est "jour"
 */
function affichageMenuJours($courant=0){
	$jours[] = 'dimanche';
	$jours[] = 'lundi';
	$jours[] = 'mardi';
	$jours[] = 'mercredi';
	$jours[] = 'jeudi';
	$jours[] = 'vendredi';
	$jours[] = 'samedi';
	$resultat = '<select name="jour">';
	foreach($jours as $cle=>$jour){
		$selected = ($courant == $cle) ? ' selected="selected"' : '';
		$resultat .= '<option value="'.$cle.'"'.$selected.'>'.$jour.'</option>';
	}
	$resultat .= '</select>';
	return $resultat;
}

/** fonction affichageMenuMois
 * Retourne un menu déroulant (<select>) contenant les mois de l'année
 * @param integer $courant - La valeur à sélectionner (selected="selected") dans 
 *   le menu. Défaut = 1.
 * @return string - Le HTML du select
 * @var array $mois - La liste des jours dans un tableau indexé à 1 en utilisant 
 *   la méthode courte à une seule instruction.
 * @note L'attribut name du select est "mois"
 */
function affichageMenuMois($courant=0){
	$mois = array(1=>'janvier','février','mars','avril','mai','juin',
		'juillet','août','septembre','octobre','novembre','décembre');
	$resultat = '<select name="mois">';
	foreach($mois as $cle=>$m){
		$selected = ($courant == $cle) ? ' selected="selected"' : '';
		$resultat .= '<option value="'.$cle.'"'.$selected.'>'.$m.'</option>';
	}
	$resultat .= '</select>';
	return $resultat;
}

/** fonction affichageMenu
 * Retourne un menu déroulant (<select>) contenant les valeurs de n'importe 
 * quel array envoyé en paramètre.
 * @param array $nom - La valeur à donner à l'attribut name du select
 * @param array $tableau - Le array à afficher dans les balise option du select. 
 *   Défaut : un array vide.
 * @param mixed $courant - La valeur à sélectionner (selected="selected") dans 
 *   le menu. Défaut = null.
 * @return string - Le HTML du select
 */
function affichageMenu($nom, $tableau=array(), $courant=0){
	$resultat = '<select name="'.$nom.'">';
	foreach($tableau as $cle=>$valeur){
		$selected = ($courant == $cle) ? ' selected="selected"' : '';
		$resultat .= '<option value="'.$cle.'"'.$selected.'>'.$valeur.'</option>';
	}
	$resultat .= '</select>';
	return $resultat;
}

/* =============================================================================
 * EXÉCUTION DU PROCESSUS DE LA PAGE
 * ============================================================================= */
/* Récupération de la donnée 'jour' avec la méthode 1 pour la valeur par défaut. */
$jourCourant = 3;
if (isset($_GET['jour'])) {
	$jourCourant = $_GET['jour'];
}
/* Récupération de la donnée 'mois' avec la méthode 2 pour la valeur par défaut. */
if (isset($_GET['mois'])) {
	$moisCourant = $_GET['mois'];
} else {
	$moisCourant = 11;
}
/* Récupération de la donnée 'mois' avec la méthode 3 pour la valeur par défaut. */
$regionCourant = (isset($_GET['region'])) ? $regionCourant = $_GET['region'] : 7;

/* =============================================================================
 * AFFICHAGE DE LA PAGE
 * ============================================================================= 
 * Faire l'affichage des 3 menus déroulants dans le formulaire.
 */
?><!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<title>Des boucles foreach</title>
</head>

<body>
<table border="1" style="margin-bottom:1em;">
	<col span="3" style="width:6em;" />
	<thead style="background-color:black; color:white;">
		<tr>
			<th>Jour<br />courant</th>
			<th>Mois<br />courant</th>
			<th>Région<br />courante</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $jourCourant ?></td>
			<td><?php echo $moisCourant ?></td>
			<td><?php echo $regionCourant ?></td>
		</tr>
	</tbody>
</table>
<form action="" method="get">
<?php 
echo affichageMenuJours($jourCourant);
echo affichageMenuMois($moisCourant);
echo affichageMenu("region", $regions, $regionCourant);
?>
<input type="submit" />
</form>
</body>
</html>
