<?php
/*---------------------------------------------------------------*/
/*
    Titre : Repére la présence de doublons dans un tableau associatif (array)                                                                                                                                                                                                                                                       
 */

/*
 	@$latableau array
 */
function existenceDoublons($laTableau) 
{
	$laTab = array_count_values($laTableau);
	$lbDoublonExiste = false;
	foreach($laTab as $lsLine) {
		if($lsLine != 1) {
			$lbDoublonExiste = true;
		}
	}
	
	return array($laTab,$lbDoublonExiste);
}

$array = [1, "hello", 1,"world", "hello"];
$laResult = existenceDoublons($array);

//Affiche le nombre de valeurs du tableau
echo '<pre>';
print_r($laResult[0]);
$lsText1 = ', ce tableau compte des doublons';
$lsText2 = ', ce tableau ne compte pas de doublons';
if($laResult[1] == 'true'){
	echo 'Oui'.$lsText1;
}else{
    echo 'Non'.$lsText2;
};
