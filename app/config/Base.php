<?php
namespace Set;

class Base{

	public function __construct(){
		echo "string";
	}

	public function zaw($data){
		$content = file_get_contents( "../../Set.json");
		$content = utf8_encode($content);
		$result = json_decode($content,true);
		$result = $result[0];
		return $result[$data];
	}

}