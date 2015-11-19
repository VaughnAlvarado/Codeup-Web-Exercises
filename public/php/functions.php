<?php
inputHas($key){
	return isset($_REQUEST($key)) ? true : false;
}
inputGet($key){
	return $_GET($key);
}
escape($input){
	return $input
}