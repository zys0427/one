<?php
namespace Zys\Test;
class Hello{
	function getStr($a){
		echo 111;
		return json_encode($a);
	}  

	function getA($b){

		return json_decode($b);
	}
}