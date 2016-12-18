<?php
	ini_set("display_errors","On");
	error_reporting(E_ALL);
	echo "sssss";
	$string 	=	"class2&class2=maleji";
	$pattern =	"/class\d&(class\d)=(.*)/";
	$get 	=	preg_match_all($pattern, $string,$matches);
	var_dump($matches);
	echo "ssssss";