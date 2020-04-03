<?php
namespace Zys\Test;
class Index{
	public function getStr($a){
		echo 111;
		return json_encode($a);
	}

    public function getA($b){
		return json_decode($b);
	}

}