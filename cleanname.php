<?php
/**
* Limpia de caracteres especiales un nombre para hacerlo compatible con prestashop
*
* @param string $name El nombre a limpiar
* @return string El nombre limpio
*/
function cleanName($name){
    $badcharacters = array(",", ".", ";", "#", ";", "[", "]", "^", "<", ">", "=", "{", "}");
    $name = str_replace($badcharacters, "", $name);
    return $name;
}

/**
* Recibe un array de nombres y los limpia para hacerlos compatibles con prestashop
*
* @param array $name_array array con los nombres a limpiar
* @return array El array con los nombres limpios, respetando los índices originales
*/
function cleanNameArray($name_array){
	foreach($name_array as &$name){
		$name = cleanName($name);
	}

	return $name_array;
}