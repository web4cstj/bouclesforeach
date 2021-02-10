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

/** fonction affichageMenuJours
 * Retourne un menu déroulant (<select>) contenant les jours de la semaine
 * @param integer $courant - La valeur à sélectionner (selected="selected") dans 
 *   le menu. Défaut = 0.
 * @return string - Le HTML du select
 * @var array $jours - La liste des jours dans un tableau indexé à 0 en 
 *   utilisant la méthode longue à plusieurs instructions.
 * @note L'attribut name du select est "jour"
 */

/** fonction affichageMenuMois
 * Retourne un menu déroulant (<select>) contenant les mois de l'année
 * @param integer $courant - La valeur à sélectionner (selected="selected") dans 
 *   le menu. Défaut = 1.
 * @return string - Le HTML du select
 * @var array $mois - La liste des jours dans un tableau indexé à 1 en utilisant 
 *   la méthode courte à une seule instruction.
 * @note L'attribut name du select est "mois"
 */

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

/* =============================================================================
 * EXÉCUTION DU PROCESSUS DE LA PAGE
 * ============================================================================= */

/* Récupération de la donnée 'jour' avec la méthode 1 pour la valeur par défaut. */

/* Récupération de la donnée 'mois' avec la méthode 2 pour la valeur par défaut. */

/* Récupération de la donnée 'region' avec la méthode 3 pour la valeur par défaut. */

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
					<td>3</td>
					<td>11</td>
					<td>7</td>
				</tr>
			</tbody>
		</table>
		<form action="" method="get">
			<select name="jour">
				<option value="0">dimanche</option>
				<option value="1">lundi</option>
				<option value="2">mardi</option>
				<option value="3" selected="selected">mercredi</option>
				<option value="4">jeudi</option>
				<option value="5">vendredi</option>
				<option value="6">samedi</option>
			</select>
			<select name="mois">
				<option value="1">janvier</option>
				<option value="2">février</option>
				<option value="3">mars</option>
				<option value="4">avril</option>
				<option value="5">mai</option>
				<option value="6">juin</option>
				<option value="7">juillet</option>
				<option value="8">août</option>
				<option value="9">septembre</option>
				<option value="10">octobre</option>
				<option value="11" selected="selected">novembre</option>
				<option value="12">décembre</option>
			</select>
			<select name="region">
				<option value="0">Abitibi-Temiscamingue</option>
				<option value="1">Bas Saint-Laurent</option>
				<option value="2">Capitale Nationale</option>
				<option value="3">Centre-du-Québec</option>
				<option value="4">Chaudière-Appalaches</option>
				<option value="5">Cote-Nord</option>
				<option value="6">Estrie</option>
				<option value="7" selected="selected">Gaspésie-Îles-de-la-Madeleine</option>
				<option value="8">Lanaudière</option>
				<option value="9">Laurentides</option>
				<option value="10">Laval</option>
				<option value="11">Mauricie</option>
				<option value="12">Montérégie</option>
				<option value="13">Montréal</option>
				<option value="14">Nord-du-Québec</option>
				<option value="15">Outaouais</option>
				<option value="16">Saguenay-Lac-Saint-Jean</option>
			</select>
			<input type="submit" />
		</form>
	</body>
</html>
