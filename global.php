<?php

function httpURL(){
	if(empty($_SERVER['HTTPS'])){
		echo "http://".$_SERVER['HTTP_HOST'].'/';	
	}else{
	echo "https://".$_SERVER['HTTP_HOST'].'/';
	}
}

function httpVistas(){
	if(empty($_SERVER['HTTPS'])){
	echo "http://".$_SERVER['HTTP_HOST'].'/vistas/';
	}else{
		echo "https://".$_SERVER['HTTP_HOST'].'/vistas/';
	}
}

function httpSources(){
	if(empty($_SERVER['HTTPS'])){
	echo "http://".$_SERVER['HTTP_HOST'].'/sources/';
	}else{
		echo "https://".$_SERVER['HTTP_HOST'].'/sources/';
	}
}

function httpImg(){
	if(empty($_SERVER['HTTPS'])){
	echo "http://".$_SERVER['HTTP_HOST'].'/img/';
	}else{
		echo "https://".$_SERVER['HTTP_HOST'].'/img/';
	}
}

function rootDIR(){
	return $_SERVER['DOCUMENT_ROOT'].'/';
}

function engineDIR(){
	return $_SERVER['DOCUMENT_ROOT'].'/vistas/engine/';
}

//¿Se utiliza?
function indexDIR(){
	return $_SERVER['DOCUMENT_ROOT'].'/vistas/index/';
}

?>