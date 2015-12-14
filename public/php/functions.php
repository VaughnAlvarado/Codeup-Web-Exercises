<?php
inputHas($key){
	return isset($_REQUEST[$key]) ? true : false;
}
inputGet($key){
	return inputHas($key) ? $_REQUEST[$key] : NULL);
escape($input){
	return htmlspecialchars(strip_tags($input));
}