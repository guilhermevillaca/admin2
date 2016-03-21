<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed');

if(!function_exists('active_link')) {
	function active($controller) {
    	// Getting CI class instance.
    	$CI = get_instance();
    	// Getting router class to active.
    	$class = $CI->router->fetch_class();
    	return ($class == $controller) ? 'class="active"' : '';
  	}
}