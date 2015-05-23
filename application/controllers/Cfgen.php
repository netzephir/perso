<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cfgen extends CI_Controller {
	public function index()
	{
            ob_start("ob_gzhandler");
            header('Content-Type: text/javascript;');
            echo 'var cfg = new Object();';
	}
}