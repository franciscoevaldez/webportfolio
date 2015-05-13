<?php

// name - address

$wWorkList = array (
	array("aca 110&deg aniversario","aca110aniversario"),
	array("portlebay","portlebay"),
	array("inaka","inaka"),
	array("bago","bago"),

	array("espn","espn"),
	array("espn latin icons","espnlatinicons"),
	array("espn fc","espnfc"),
	array("espn web","espnweb"),

	array("graphic language","graphiclanguage"),
	array("light experiments","lightexperiments"),
	array("bjork departure","bjorkdeparture"),
	array("science and technology","scienceandtechnology"),

	array("vida de vivos","vidadevivos"),
	//array("prototype","prototype"),
	array("posters","posters"),
	array("el observatorio","elobservatorio"),
	array("lote 77","lote77"),

	
);

// return vars for next and previous

if ($workIndex == 0) {
	$prevIndex = count($wWorkList)-1;
} else {
	$prevIndex = $workIndex-1;
}

if ($workIndex == (count($wWorkList) -1)) {
	$nextIndex = 0;
} else {
	$nextIndex = $workIndex+1;
}

?>