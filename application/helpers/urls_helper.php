<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function assets_url () {
        $CI =& get_instance();
	return $CI->config->item('assets_url');
}

function base_url () {
        $CI =& get_instance();
	return $CI->config->item('base_url');
}

function front_url () {
        $CI =& get_instance();
	return $CI->config->item('front_url');
}

function isMenuOn($lien) {
	$CI =& get_instance();
	
	if (strlen($lien) == 0) {
		return $CI->uri->uri_string == $lien;
	} else {
		return substr($CI->uri->uri_string, 0, strlen($lien)) == $lien;
	}
}